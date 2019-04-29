<?php

namespace App\Http\Controllers\backend\Participants;

use App\Models\Participant;
use Illuminate\Http\Request;


use App\Http\Controllers\Controller;


class ParticipantsController extends Controller
{
    public function show(){

        return view("backend.participant.participants");

    }
    public function add(Request $request){

        $add=new Participant();
        $add->participant=$request->participant;
	$add->state="0";
        if($add->save()){
            return["status"=>"success","title"=>"yes","message"=>"no wrong!!"];

        }
        return["status"=>"error","title"=>"no","message"=>"wrong!!"];



    }
    public function allShow(){
        $participants=Participant::all();
        return view("backend.participant.list",compact("participants"));

    }
    public function  delete(Request $request){
        $participants=Participant::where("id",$request->key)->delete();
        if($participants){
            return["status"=>"success","title"=>"Başarılı","message"=>"silindi"];
        }
        return["status"=>"error","title"=>"no","message"=>"wrong!!"];


    }
}

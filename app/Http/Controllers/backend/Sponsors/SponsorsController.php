<?php

namespace App\Http\Controllers\backend\Sponsors;

use App\Models\Sponsor;
use Illuminate\Http\Request;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Input;

class SponsorsController extends Controller
{

    public function show(){

        $sponsors= Sponsor::all();
        return view("backend.sponsor.sponsor",compact("sponsors"));
    }
    public function create(Request $request){
        $file=null;

        $file = Input::file('coverImage');
        $filenameWithExt = $file->getClientOriginalName();
        $name="sponsor".time().$filenameWithExt;
        $file->move(public_path().'/sponsors/',$name);
        $add=new Sponsor();
        $add->name=$request->name;

        $add->cover_image="sponsors/".$name;


        if($add->save()){
            return["status"=>"success","title"=>"yes","message"=>"no wrong!!"];

        }
        return["status"=>"error","title"=>"no","message"=>"wrong!!"];


    }
    public function createShow(){


        return view("backend.sponsor.newSponsor");
    }
    public  function delete(Request $request){

        $sponsor = Sponsor::where("id", $request->id)->first();
        Storage::disk("public")->delete($sponsor->cover_image);
        $sponsor->delete();

        if ($sponsor){

            return ["status" => "success", "title" => "başarılı", "message" => "Blog silindi."];
        }

        return ["status" => "error", "title" => "Hatalı", "message" => "Blog silinemedi"];
    }
    public function updateShow($id='')
    {
        $sponsor = Sponsor::find($id);


        return view("backend.sponsor.newSponsor",compact("sponsor"));
    }
}

<?php

namespace App\Http\Controllers\backend\Kura;

use App\Models\Kura;
use App\Models\Participant;


use Illuminate\Http\Request;


use App\Http\Controllers\Controller;


class KuraController extends Controller
{
    public function show(){
        return view("backend.kura.kura");
    }




    public function kura(Request $request){


     


        $control=Participant::where("state","0")->count();

        if ($control>=$request->txtCekilis){

            $d=Participant::where("state",'0')->inRandomOrder()->limit($request->txtCekilis)->get();

            foreach ($d as $m) {
                $array[]=$m->participant;
                $ids[]=$m->id;

            }
            for ($sayi=0; count($array)>$sayi; $sayi++){
                $kura=new Kura();
                $kura->winners = $array[$sayi];
                $winners[] = $array[$sayi];
                $kura->gift = $request->txtCekilisAdi;
                Participant::where("id",$ids[$sayi])->update(["state"=>"1"]);
                $kura->save();

            }

        }else{

            $winners=["Yeterli kişi sayısı yok"];


        }






        return redirect()->route('backend.kura.show')->with("winners",$winners);



    }
    public function kuraList(){
        $winners=Kura::all();

    return view("backend.kura.kuraList",compact("winners"));



    }
public function delete(Request $request){


    $kura = Kura::where("id", $request->id)->first();

    $kura->delete();



}



}

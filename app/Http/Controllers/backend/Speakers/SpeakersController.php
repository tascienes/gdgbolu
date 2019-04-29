<?php

namespace App\Http\Controllers\backend\Speakers;

use App\Models\Speaker;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class SpeakersController extends Controller
{
public function show(){

    $speakers= Speaker::all();
    return view("backend.speaker.speaker",compact("speakers"));
}
public function create(Request $request){
    $file=null;

    $file = Input::file('coverImage');
    $filenameWithExt = $file->getClientOriginalName();
    $name="speaker".time().$filenameWithExt;
    $file->move(public_path().'/speakers/',$name);
    $add=new Speaker();
    $add->name=$request->name;
    $add->scope=$request->scope;
    $add->cover_image="speakers/".$name;


    if($add->save()){
        return["status"=>"success","title"=>"yes","message"=>"no wrong!!"];

    }
    return["status"=>"error","title"=>"no","message"=>"wrong!!"];


}
public function createShow(){


    return view("backend.speaker.newSpeaker");
}
public  function delete(Request $request){

    $speaker = Speaker::where("id", $request->id)->first();
    Storage::disk("public")->delete($speaker->cover_image);
    $speaker->delete();

    if ($speaker){

        return ["status" => "success", "title" => "başarılı", "message" => "Blog silindi."];
    }

    return ["status" => "error", "title" => "Hatalı", "message" => "Blog silinemedi"];
}
    public function updateShow($id='')
    {
        $speaker = Speaker::find($id);


        return view("backend.speaker.newSpeaker",compact("speaker"));
    }


}

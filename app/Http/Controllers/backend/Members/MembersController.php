<?php

namespace App\Http\Controllers\backend\Members;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class MembersController extends Controller
{

    public function show(){

        $members= Member::all();
        return view("backend.member.member",compact("members"));
    }
    public function create(Request $request){
        
        $file=null;

        $file = Input::file('coverImage');
        $filenameWithExt = $file->getClientOriginalName();
        $name="member".time().$filenameWithExt;
        $file->move(public_path().'/members/',$name);
        $add=new Member();
        $add->name=$request->name;
        $add->scope=$request->scope;
        $add->cover_image="members/".$name;


        if($add->save()){
            return["status"=>"success","title"=>"yes","message"=>"no wrong!!"];

        }
        return["status"=>"error","title"=>"no","message"=>"wrong!!"];


    }
    public function createShow(){


        return view("backend.member.newMember");
    }
    public  function delete(Request $request){

        $member = Member::where("id", $request->id)->first();
        Storage::disk("public")->delete($member->cover_image);
        $member->delete();

        if ($member){

            return ["status" => "success", "title" => "başarılı", "message" => "Blog silindi."];
        }

        return ["status" => "error", "title" => "Hatalı", "message" => "Blog silinemedi"];
    }
    public function updateShow($id='')
    {
        $member = Member::find($id);


        return view("backend.member.newMember",compact("member"));
    }

}

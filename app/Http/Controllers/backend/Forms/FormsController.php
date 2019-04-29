<?php

namespace App\Http\Controllers\backend\Forms;

use App\Models\Apply;
use App\Models\Feedback;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class FormsController extends Controller
{
public function feedbackList(){

    $feedbacks=Feedback::all();


    return view("backend.forms.feedback",compact("feedbacks"));
}


public function feedDelete(Request $request){
    $feed = Feedback::where("id", $request->id)->first();

    $feed->delete();

}


    public function applyDelete(Request $request){
        $apply = Apply::where("id", $request->id)->first();

        $apply->delete();




    }




    public function applyList(){


        $applys=Apply::all();
        return view("backend.forms.apply",compact("applys"));
    }


}

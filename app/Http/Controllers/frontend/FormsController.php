<?php

namespace App\Http\Controllers\frontend;

use App\Models\Apply;
use App\Models\Feedback;
use App\Models\Setting;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class FormsController extends Controller
{
    public  function applyShow(){
        $settings=Setting::all();


return view("frontend.form.apply",compact("settings"));



    }
    public function applySubmit(Request $request){

        $apply=new Apply();

        $apply->fname=$request->fname;
        $apply->email=$request->email;
        $apply->subject=$request->subject;
        $apply->message=$request->message;

        $apply->save();
        echo "Kayıt için teşekkürler :)):)";

        return redirect("/");
    }



    public  function feedbackShow(){
       // $settings=Setting::all();


     //   return view("frontend.form.feedback",compact("settings"));


	 return redirect('https://docs.google.com/forms/d/e/1FAIpQLSd-idfrHKzm9Y8dFbxesgSpoj68WM3CZZnAM_qMXEPaaBJ9UQ/viewform?vc=0&c=0&w=1'); 
    }
    public  function photosShow(){
     

	 return redirect('https://photos.app.goo.gl/zUq2euCQMbsQA55h8'); 
    }



    public function feedbackSubmit(Request $request){

        $fb=new Feedback();

        $fb->fname=$request->fname;
        $fb->email=$request->email;
        $fb->subject=$request->subject;
        $fb->bolum=$request->bolum;
        $fb->message=$request->message;

        $fb->save();
        echo "Kayıt için teşekkürler :)):)";

        return redirect("/");
    }
}

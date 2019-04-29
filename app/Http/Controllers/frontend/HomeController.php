<?php

namespace App\Http\Controllers\frontend;

use App\Models\Album;
use App\Models\Blog;
use App\Models\Counter;
use App\Models\Member;
use App\Models\Setting;
use App\Models\Speaker;
use App\Models\Ticket;
use App\Models\Event;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function home(){
        $counters = Counter::all();
        $tickets =Ticket::all();
        $settings=Setting::all();
        $events=Event::all();
        $blogs=Blog::where("status",1)->get();
        $speakers=Speaker::all();
        $members=Member::all();


        return view('frontend.home.index',compact("counters","tickets","settings","events","blogs","speakers","members","statuses"));




    }
    public function gallery(){

        $settings=Setting::all();
        $albums=Album::all();
        return view("frontend.home.gallery",compact("settings", "albums"));
    }

    public function team(){
    $settings=Setting::all();
    $members=Member::all();

    return view("frontend.home.team",compact("members","settings"));

}
public function about(){
    $settings=Setting::all();

    return view("frontend.home.about-us",compact("settings"));
}

public function sponsor(){
    $settings=Setting::all();
    $sponsors=Sponsor::all();
    return view("frontend.home.sponsor",compact("settings","sponsors"));

}





}

<?php

namespace App\Http\Controllers\frontend;

use App\Models\Blog;
use App\Models\Member;
use App\Models\Setting;
use App\Models\Sponsor;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
public function gdg(){

    $settings=Setting::all();
    $blogs=Blog::where("keywords","gdg")->take(10)->get();
    return view("frontend.home.gdg",compact("settings","blogs"));

}public function wtm(){

    $settings=Setting::all();
    $blogs=Blog::where("keywords","wtm")->take(10)->get();
    return view("frontend.home.wtm",compact("settings","blogs"));

}public function workshop(){

    $settings=Setting::all();
    $blogs=Blog::where("keywords","workshop")->take(10)->get();
    return view("frontend.home.workshop",compact("settings","blogs"));

}

}

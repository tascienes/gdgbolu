<?php

namespace App\Http\Controllers\backend\Counters;

use App\Models\Counter;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CountersController extends Controller
{
    public function show()
    {
        $counters = Counter::all();
        $counter = Counter::all();
        return view("backend.counter.counters",compact("counters"));
    }
    public function update(Request $request)
    {




        $counter = Counter::find(1)->update([


            "event"=>$request->event,
            "participant" => $request->participant,
            "speaker" => $request->speaker,
            "workshop" => $request->workshop,


        ]);




    }
}

<?php

namespace App\Http\Controllers\backend\Events;

use App\Models\Event;
use Illuminate\Http\Request;


use App\Http\Controllers\Controller;

class EventsController extends Controller
{
    public function show()
    {
        $events=Event::all();
        return view("backend.event.events",compact("events"));
    }
    public function update(Request $request)
    {
        $event = Event::where("key", $request->key)->update(["value"=>$request->value]);

        if ($event){
            return "başarılı";
        }

        return "hatalı";
    }

    public function create(Request $request)
    {
        $event = new Event();

        $event->key = $request->key;
        $event->value = $request->value;

        if($event->save()) {
            return ["status" => "success", "title" => "Başarılı", "message" => "Yeni ayar kaydedildi"];
        }

        return ["status" => "error", "title" => "Hatalı", "message" => "Yeni ayar kaydedilemedi"];
    }

    public function delete(Request $request)
    {
        $event = Event::where("key", $request->key)->delete();

        if ($event){
            return ["status" => "success", "title" => "Başarılı", "message" => "Ayar silindi"];
        }

        return ["status" => "error", "title" => "Hatalı", "message" => "Ayar silinemedi"];
    }
}

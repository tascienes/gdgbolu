<?php

namespace App\Http\Controllers\backend\Tickets;

use App\Models\Ticket;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TicketsController extends Controller
{
    public function show()
    {
        $tickets = Ticket::all();
        $ticket = Ticket::all();
        return view("backend.ticket.tickets",compact("tickets"));
    }
    public function update(Request $request)
    {




        $ticket = Ticket::find(1)->update([


            "name"=>$request->name,
            "slug" => $request->slug,
            "title" => $request->title,
            "keywords" => $request->keywords,
            "description" => $request->description,

        ]);

/*
        $ticket = new Ticket();
        $ticket->name = $request->name;
        $ticket->slug = "deneme";
        $ticket->title = $request->title;
        $ticket->keywords = $request->keywords;
        $ticket->description = $request->description;
        if($ticket->save()){

            return ["status" => "success", "title" => "Başarılı", "message" => "Yeni sayfa kaydedildi"];        }

*/


    }



}

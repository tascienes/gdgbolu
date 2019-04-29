<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $table= "tickets";
    protected $fillable = ["title", "keywords", "description", "slug", "name"];

}

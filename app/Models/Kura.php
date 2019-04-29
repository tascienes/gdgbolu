<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kura extends Model
{


    protected $table= "kura";
    protected $fillable = ["winners", "gift"];

}

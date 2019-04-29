<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Counter extends Model
{
    protected $table= "counters";
    protected $fillable = ["event", "speaker", "workshop", "participant"];

}

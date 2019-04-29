<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Apply extends Model
{
    protected $table = "applys";
    protected $fillable = ["fname","email","subject","message"];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Speaker extends Model
{
    protected $table= "speakers";
    protected $fillable = ["cover_image", "name", "scope"];
}

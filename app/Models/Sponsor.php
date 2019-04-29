<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sponsor extends Model
{
    protected $table= "sponsors";
    protected $fillable = ["cover_image", "name"];
}

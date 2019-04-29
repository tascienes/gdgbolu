<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table= "members";
    protected $fillable = ["cover_image", "name", "scope"];
}

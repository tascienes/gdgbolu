<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    public function category()
    {
        return $this->hasOne(BlogCategory::class, "id", "category_id");

    }



}

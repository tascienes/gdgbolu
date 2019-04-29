<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    protected $table = "modules";
    protected $fillable = ["page_id", "title", "descripton", "name"];

    public function page() {
        return $this->hasOne(Page::class, "id" ,"page_id");
    }
}

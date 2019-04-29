<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $table= "pages";
    protected $fillable = ["title", "keywords", "description", "slug", "name"];

    public function modules() {
        return $this->hasMany(Module::class, "page_id", "id");
    }
}

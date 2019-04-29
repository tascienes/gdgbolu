<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("user_id");
            $table->integer("category_id");
            $table->string("cover_image")->nullable();
            $table->string("title");
            $table->string("keywords")->nullable();
            $table->string("description")->nullable();
            $table->text("content");
            $table->string("slug");
            $table->string("tags")->nullable();
            $table->enum("status", [1,0]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('blogs');
    }
}

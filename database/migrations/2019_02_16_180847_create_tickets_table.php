<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->increments('id');
            $table->string("title");
            $table->string("keywords");
            $table->string("description");
            $table->string("slug");
            $table->string("name");
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists("tickets");
    }
}

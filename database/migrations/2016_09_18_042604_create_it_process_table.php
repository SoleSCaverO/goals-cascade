<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItProcessTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('it_process', function (Blueprint $table) {
            $table->increments('id');


            $table->integer('process_id')->unsigned();
            $table->foreign('process_id')->references('id')->on('processes');
            $table->integer('it_id')->unsigned();
            $table->foreign('it_id')->references('id')->on('its');
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
        Schema::drop('it_process');
    }
}

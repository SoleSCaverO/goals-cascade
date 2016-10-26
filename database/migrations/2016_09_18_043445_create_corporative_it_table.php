<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCorporativeItTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('corporative_it', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('it_id')->unsigned();
            $table->foreign('it_id')->references('id')->on('its');
            $table->integer('corporative_id')->unsigned();
            $table->foreign('corporative_id')->references('id')->on('corporatives');
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
        Schema::drop('corporative_it');
    }
}

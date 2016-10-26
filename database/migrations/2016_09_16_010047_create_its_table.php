<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('its', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('perspective_id')->unsigned();
            $table->foreign('perspective_id')->references('id')->on('perspectives');
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
        Schema::drop('its');
    }
}

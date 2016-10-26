<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCorporativesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('corporatives', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('perspective_id')->unsigned();
            $table->foreign('perspective_id')->references('id')->on('perspectives');
            $table->integer('benefit')->default(0);
            $table->integer('risk')->default(0);
            $table->integer('resource')->default(0);
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
        Schema::drop('corporatives');
    }
}

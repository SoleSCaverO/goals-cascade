<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCorporativeEnterpriseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('corporative_enterprise', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('enterprise_id')->unsigned();
            $table->foreign('enterprise_id')->references('id')->on('enterprises');
            $table->integer('corporative_id')->unsigned();
            $table->foreign('corporative_id')->references('id')->on('corporatives');
            $table ->string('aligned_goal');
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
        Schema::drop('corporative_enterprise');
    }
}

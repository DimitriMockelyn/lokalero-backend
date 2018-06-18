<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('location_id')->unsigned()->nullable(); 
            $table->foreign('location_id')->references('id')->on('locations');
            $table->string('name');
            $table->string('description');
            $table->string('image');
            $table->string('image_cover');
            $table->string('slogan');
            $table->integer('amount_target')->default(0)->unsigned();
            $table->integer('amount_farmed')->default(0)->unsigned();
            $table->date('end_date');
            $table->boolean('active');
            $table->integer('contributions')->default(0)->unsigned();
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
        Schema::dropIfExists('projects');
    }
}

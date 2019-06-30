<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubroutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subroutes', function (Blueprint $table) {
            $table->increments('subroute_id');
           
            $table->string('location_name');
            $table->double('longitude');
            $table->double('langitude');
            $table->timestamps();
            $table->integer('route_id')->unsigned();
            $table->foreign('route_id')->references('route_id')->on('routes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subroutes');
    }
}

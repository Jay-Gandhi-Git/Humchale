<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonTripDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('person_trip_details', function (Blueprint $table) {
            $table->increments('persontrip_id');
            $table->integer('route_id')->unsigned();
            $table->foreign('route_id')->references('route_id')->on('routes');
            $table->integer('owner_id')->unsigned();
            $table->foreign('owner_id')->references('owner_id')->on('owners');
            $table->integer('person_id')->unsigned();
            $table->foreign('person_id')->references('person_id')->on('persons');
            $table->string('status',20);

            
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
        Schema::dropIfExists('person_trip_details');
    }
}

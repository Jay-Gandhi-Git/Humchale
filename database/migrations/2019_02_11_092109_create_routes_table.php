<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('routes', function (Blueprint $table) {
            $table->increments('route_id');
            $table->integer('owner_id')->unsigned();
            $table->foreign('owner_id')->references('owner_id')->on('owners');
            $table->string('source');
            $table->string('destination');
            $table->integer('no_of_seats_available');
            $table->string('vehicle_company');
            $table->date('arrival_date');
            $table->time('arrival_time');
            $table->date('reached_date');
            $table->time('reached_time');
            $table->time('pickup_time');
            $table->string('pickup_location');
            $table->string('driver_name');
            $table->bigInteger('contact_no');




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
        Schema::dropIfExists('routes');
    }
}

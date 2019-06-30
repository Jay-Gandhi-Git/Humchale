<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->increments('vehicle_id');
            $table->integer('vehicletype_id')->unsigned();
            $table->foreign('vehicletype_id')->references('vehicletype_id')->on('vehicletypes');
            $table->integer('ownerId')->unsigned();
            $table->foreign('ownerId')->references('person_id')->on('persons');
            $table->string('vehicle_name');
            $table->string('vehicle_company');
            $table->string('vehicle_model_date');
            $table->string('vehicle_number');
            $table->string('no_of_seats');
            $table->string('aircondition_status',1);
            $table->Text('type_of_seats');
            $table->string('rc_book_number');
            $table->string('vehicle_photo');
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
        Schema::dropIfExists('vehicles');
    }
}

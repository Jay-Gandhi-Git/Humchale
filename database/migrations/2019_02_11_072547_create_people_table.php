<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persons', function (Blueprint $table) {
            $table->increments('person_id');
            $table->Text('full_name');  
            $table->Text('address');
            $table->integer('pincode');    
            $table->string('email'); 
            $table->string('password');
            $table->bigInteger('mobile_no');
            $table->string('gender',1);
            $table->bigInteger('aadhar_card_no');
            $table->dateTime('activation_date');
            $table->dateTime('validity');
            $table->string('profile_picture');    
            $table->boolean('is_active');
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
        Schema::dropIfExists('people');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('home_type');
            $table->string('room_type');
            $table->integer('total_occupancy');
            $table->integer('total_bedrooms');
            $table->integer('total_bathrooms');
            $table->string('summary');
            $table->text('address');
            $table->boolean('has_tv');
            $table->boolean('has_kitchen');
            $table->boolean('has_air_con');
            $table->boolean('has_heating');
            $table->boolean('has_internet');
            $table->string('price');
            $table->dateTime('published_at');
            $table->integer('owner_id');
            $table->double('latitude');
            $table->double('longitude');
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
        Schema::dropIfExists('rooms');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehicleCargoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicle', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cargoId');
            $table->string('vin');
            $table->string('make');
            $table->string('model');
            $table->string('type');
            $table->date('year');
            $table->integer('key');
            $table->string('title_status');
            $table->string('title_number');
            $table->string('state');
            $table->string('color');
            $table->string('operation_status');
            $table->string('dismantled_status');
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
        Schema::dropIfExists('vehicle');
    }
}

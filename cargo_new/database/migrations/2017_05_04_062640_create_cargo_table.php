<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCargoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('cargo', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('companyId');
            $table->integer('agentId');
            $table->integer('customerId');
            $table->integer('status');
            $table->text('images');
            $table->integer('storageLocationId');
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
        Schema::dropIfExists('cargo');
    }
}

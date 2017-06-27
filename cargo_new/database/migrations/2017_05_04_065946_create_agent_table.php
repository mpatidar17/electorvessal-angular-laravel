<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('agent', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('companyId');
            $table->string('firstName');
            $table->string('middleInitial');
            $table->string('lastName');
            $table->string('email');
            $table->string('password');
            $table->string('activeStatus');
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
        Schema::dropIfExists('agent');
    }
}

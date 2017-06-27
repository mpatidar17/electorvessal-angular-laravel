<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyNewTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company', function (Blueprint $table) {
            $table->increments('id');
            $table->string ('name');
            $table->string ('description');
            $table->string ('logo');
            $table->string ('address1');
            $table->string ('address2');
            $table->string ('city');
            $table->string ('state');
            $table->string ('zipCode');
            $table->string ('country');
            $table->integer('superUserId');
            $table->integer('ftpFolder');
            $table->integer('allowedAgents');
            $table->integer('allowedCustomerPerAgent');
            $table->integer('allowedCustomMessages');
            $table->integer('allowedStorageSpace');
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
        Schema::dropIfExists('company');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStorageLocationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('storageLocation', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('companyId');
            $table->string('label');
            $table->string('address1');
            $table->string('address2');
            $table->string('city');
            $table->string('zipCode');
            $table->string('state');
            $table->string('country');
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
        Schema::dropIfExists('storageLocation');
    }
}

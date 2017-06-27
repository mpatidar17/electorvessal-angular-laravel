<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCargoTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    
    public function up()
    {
        Schema::create('cargoTag', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('companyId');
            $table->integer('tagId');
            $table->integer('groupId');
            $table->string('groupName');
            $table->string('groupDescription');
            $table->integer('groupOrder');
            $table->integer('textTagId');
            $table->string('textTagLabel');
            $table->string('textTagDescription');
            $table->string('textTagRequired');
            $table->integer('textTagValueId');
            $table->string('textTagValuesValue');
            $table->string('textTagValuesCargoeId');
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
        Schema::dropIfExists('cargoTag');
    }
}

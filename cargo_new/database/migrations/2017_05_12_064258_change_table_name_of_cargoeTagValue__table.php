<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeTableNameOfCargoeTagValueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cargoeTagValue', function (Blueprint $table) {
            $from = 'cargoeTagValue';
            $to   = 'cargoTagValue';
            Schema::rename($from, $to);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cargoTagValue', function (Blueprint $table) {
            $from = 'cargoTagValue';
            $to   = 'cargoeTagValue';
            Schema::rename($from, $to);
        });
    }
}

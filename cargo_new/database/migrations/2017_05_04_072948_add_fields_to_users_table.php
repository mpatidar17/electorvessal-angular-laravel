<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->integer('companyId');
            $table->string('firstName');
            $table->string('middleInitial');
            $table->string('lastName');
            $table->string('activeStatus');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('companyId');
            $table->dropColumn('firstName');
            $table->dropColumn('middleInitial');
            $table->dropColumn('lastName');
            $table->dropColumn('activeStatus');
        });
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnUpdateUsersToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('adress')->nullable();
            $table->string('location')->nullable();
            $table->string('stade')->nullable();
            $table->string('country')->nullable();
            $table->string('zipcode')->nullable();
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
            $table->dropColumn('adress');
            $table->dropColumn('location');
            $table->dropColumn('stade');
            $table->dropColumn('country');
            $table->dropColumn('zipcode');
        });
    }
}

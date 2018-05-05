<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tbluser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_user', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('email')->unique()->nullable(false);
            $table->string('password')->nullable(false);
            $table->string('fullname')->nullable(false);
            $table->string('address')->nullable(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tbl_user');
    }
}

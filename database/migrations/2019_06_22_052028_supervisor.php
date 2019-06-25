<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Supervisor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supervisor', function (Blueprint $table) {
            $table->increments('id');
            $table->string('supervId');
            $table->string('nama');
            $table->string('alamat');
            $table->string('kontak');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('supervisor');
    }
}

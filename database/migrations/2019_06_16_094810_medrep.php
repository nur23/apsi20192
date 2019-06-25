<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Medrep extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medrep', function (Blueprint $table) {
            $table->increments('id');
            $table->string('medrepId');
            $table->string('nama');
            $table->string('alamat');
            $table->string('kontak');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->integer('pencapaian');
            $table->integer('target');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medrep');
    }
}

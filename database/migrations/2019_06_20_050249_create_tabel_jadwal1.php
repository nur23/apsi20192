<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTabelJadwal1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal', function (Blueprint $table) {
            $table->increments('id');
            $table->string('hari');
            $table->time('jam_masuk');
            $table->time('jam_keluar');
            $table->integer('dokter_id')->unsigned();
            $table->foreign('dokter_id')->references('id')->on('dokter');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('jadwal');
    }
}

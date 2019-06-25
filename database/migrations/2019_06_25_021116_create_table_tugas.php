<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTugas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tugas', function (Blueprint $table) {
            $table->increments('id');
            $table->date('jadwal');
            $table->string('tipe');
            $table->boolean('status');
            $table->integer('medrep_id')->unsigned();
            $table->integer('dokter_id')->unsigned();

            $table->foreign('medrep_id')->references('id')->on('medrep')->onDelete('cascade');
            
            $table->foreign('dokter_id')->references('id')->on('dokter')->onDelete('cascade');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tugas');
    }
}

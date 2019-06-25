<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Produk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produk', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('jenis');
            $table->string('komposisi');
            $table->string('indikasi');
            $table->string('aturan_pakai');
            $table->string('cara_kerja');
            $table->string('peringatan_obat');
            $table->integer('harga');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

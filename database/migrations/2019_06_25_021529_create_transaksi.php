<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransaksi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('harga');
            $table->integer('jumlahresep');
            $table->date('tgl_awal');
            $table->date('tgl_akhir');
            $table->integer('tugas_id')->unsigned();
            $table->integer('produk_id')->unsigned();

            $table->foreign('produk_id')->references('id')->on('produk')->onDelete('cascade');
            
            $table->foreign('tugas_id')->references('id')->on('tugas')->onDelete('cascade');     
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('transaksi');
    }
}

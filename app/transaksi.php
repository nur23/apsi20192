<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    protected $table = "transaksi";
    protected $fillable = [
    'id',
    'harga',
    'jumlahresep',
    'tgl_awal',
    'tgl_akhir',
    'produk_id',
    'tugas_id'
     ];

    public $timestamps = false;

    public function tugas() {
    	return $this->belongsTo('App\tugas');
	}

	public function produk() {
    	return $this->belongsTo('App\produk');
	}
}

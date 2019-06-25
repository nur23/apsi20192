<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    protected $table = "produk";
    protected $fillable = [
    'id_produk',
    'nama_produk',
    'aturan',
    'harga',
    'indikasi',
    'jenis',
    'komposisi',
    'nama',
    'peringatan',
     ];

     public $timestamps = false;
}

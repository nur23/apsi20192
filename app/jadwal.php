<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jadwal extends Model
{
    protected $table = "jadwal";
    protected $fillable = [
    'id',
    'hari',
    'jam_masuk',
    'jam_keluar',
    'dokter_id'
     ];

    public $timestamps = false; 

     public function dokter(){
     	return $this->belongsTo('App\dokter');
     }
}

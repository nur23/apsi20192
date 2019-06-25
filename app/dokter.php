<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dokter extends Model
{
    protected $table = "dokter";
    protected $fillable = [
        'id',
        'kontak',
        'nama',
        'potensi',
        'spesialisasi'
     ];
    public $timestamps = false; 

     public function jadwal(){
     	return $this->hasMany('App\jadwal');
     }
}

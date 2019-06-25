<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tugas extends Model
{
    protected $table = "tugas";
    protected $fillable = [
    'id',
    'jadwal',
    'tipe',
    'status',
    'medrep_id',
    'dokter_id'
     ];
     
    public $timestamps = false;

    public function medrep() {
    	return $this->belongsTo('App\medrep');
	}

	public function dokter() {
    	return $this->belongsTo('App\dokter');
	}

    public function transaksi() {
        return $this->hasMany('App\transaksi');
    }
}

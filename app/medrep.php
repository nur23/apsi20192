<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class medrep extends Authenticatable
{
    protected $table = "medrep";

    protected $guard = 'medrep';

    protected $fillable = [
    'medrepId',
    'nama',
    'alamat',
    'kontak',
    'email',
    'pencapaian',
    'target'
     ];

    protected $hidden = ['password', 'remember_token'];

    public $timestamps = false;

    public function tugas() {
        return $this->hasMany('App\tugas');
    }
}

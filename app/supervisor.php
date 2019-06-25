<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class supervisor extends Authenticatable
{
    protected $table = "supervisor";

    protected $guard = 'supervisor';

    protected $fillable = [
    'supervId',
    'nama',
    'alamat',
    'kontak',
    'email',
     ];

    protected $hidden = ['password', 'remember_token'];

    public $timestamps = false;

}

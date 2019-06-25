<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\medrep;

class LaporanController extends Controller
{
    public function home()
    {
    	$medrep = medrep::all();
        return view('laporan.laporan',compact('medrep'));
    }
}

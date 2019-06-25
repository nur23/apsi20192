<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\medrep;

class C_Supervisor extends Controller
{
    public function home()
    {
        //
        return view('supervisor.supervisor');
    }

    public function medrep()
    {
        //
        $data = medrep::all();
        return view('supervisor.listmedrep', compact('data'));
    }

    public function tugasMedrep(Medrep $medrep)
    {
        //
        // $medrep = medrep::find($medrepId);
        return view('supervisor.tugas', compact('medrep'));
    }
}

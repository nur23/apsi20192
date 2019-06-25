<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\medrep;
use App\tugas;
use App\dokter;

class SupervisorController extends Controller
{

    public function home()
    {
        return view('supervisor.supervisor');
    }

    public function medrep()
    {
        $data = medrep::all();
        return view('supervisor.listmedrep', compact('data'));
    }

    public function showTugas(Medrep $medrep)
    {
        return view('supervisor.tugas', compact('medrep'));
    }

    public function inputTugas(Medrep $medrep)
    {
        $dokter = dokter::where('status', '=', 0)->get();
        return view('supervisor.inputugas', compact('medrep','dokter'));
    }

    public function storeTugas(Request $request, $medrep)
    {

    	$this->validate($request, [
    		'dokter' => 'required'
    	]);


        $data = new tugas([
            'tipe' => $request->get('tipe'),
            'status'=> 0,
            'dokter_id'=> $request->get('dokter'),
            'medrep_id'=> $medrep,
        ]);

        $dokter_id = $request->get('dokter');
        $dokter = dokter::find($dokter_id);
        $dokter->status = 1;

        $dokter->save();
        $data->save();
    }

    public function targetMedrep(Medrep $medrep)
    {

        return view('supervisor.target', compact('medrep'));
    }

    public function updateTarget(Request $request, $id)
    {
    	$this->validate($request, [
    		'target' => 'integer|min:0'
    	]);

        $data = medrep::find($id);
        $data->target = $request->get('target');
        $data->timestamps = false;
        $data->save();
        
        return redirect('supervisor/listmedrep');
    }
}

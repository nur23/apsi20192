<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\medrep;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class MLoginController extends Controller
{
    public function showLoginForm(){
        if(Session::get('medrep')){
            return redirect('supervisor/home');
        }
        else{
            return view('login.medrep', ['except' => ['logout']]);
        }
    }

    public function login(Request $request){
		$this->validate($request, [
    		'password' => 'required|min:6'
    	]);

        $supervId = $request->id;
        $password = $request->password;

    	$data = medrep::where('medrepId',$supervId)->first();
        if($data){ //apakah email tersebut ada atau tidak
            if(Hash::check($password,$data->password)){
                Session::put('name',$data->nama);
                Session::put('supervId',$data->medrepId);
                Session::put('id',$data->id);
                Session::put('medrep',TRUE);
                return redirect('/medrep/home');
            }
            else{
                return redirect('login')->with('alert','Password atau Email, Salah !');
            }
        }
        else{
            return redirect('login')->with('alert','Password atau Email, Salah!');
        }
    	return redirect()->back();
    }

    public function logout(){
    	Session::flush();

    	return redirect('medrep');

    }
}

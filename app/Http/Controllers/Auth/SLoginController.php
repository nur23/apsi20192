<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use App\User;
use App\supervisor;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class SLoginController extends Controller
{
	
    public function showLoginForm(){
        if(Session::get('login')){
            return redirect('supervisor/home');
        }
        else{
            return view('login.login', ['except' => ['logout']]);
        }
    	
    }

    public function login(Request $request){
		$this->validate($request, [
    		'password' => 'required|min:6'
    	]);

        $supervId = $request->id;
        $password = $request->password;

    	$data = supervisor::where('supervId',$supervId)->first();
        if($data){ //apakah email tersebut ada atau tidak
            if(Hash::check($password,$data->password)){
                Session::put('name',$data->nama);
                Session::put('supervId',$data->supervId);
                Session::put('id',$data->id);
                Session::put('login',TRUE);
                return redirect('/supervisor/home');
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
    	return redirect('supervisor');

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Session;

class LoginController extends Controller
{
    //
    //
    public function authenticate(Request $request)
    {

    	//return dd($request->all());
		// set an authentication 
		if(auth::attempt(['email'=> $request->email, 'password' => $request->password])){
			// let user know their logged in 
			$msg = "you have logged in !";
    		return redirect('/')->with('loginStatus', $msg);
		}else{
			$msg = "Invalid username or password";
    		# return error sending messages
    		Session::flash('loginError', $msg);
			return back()->with('loginError', $msg);
		}
    }
}

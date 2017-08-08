<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function authenticate()
    {
    	# code...
    	if(Auth::attempt(['email' => $email, 'password' => $password])){
    		return redirect()->intended('dashboard');
    	}
    }
}

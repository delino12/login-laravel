<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class PageController extends Controller
{
    // first check if users is logged in using middleware
    public function index()
    {
    	# code...
        if(Auth::guest()){
            return redirect('/login');
        }else{
           return view('welcome'); 
        }
    }

    public function login()
    {
    	return view('login');
    }

    public function register(){
    	return view('register');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // first check if users is logged in using middleware
    public function __construct()
    {
    	# code...  This middleware will check for the login middleware
    	//$this->middleware->('login');
    }

    public function index()
    {
    	# code...
    	return view('welcome');
    }

    public function login()
    {
    	# code...
    	return view('login');
    }
}

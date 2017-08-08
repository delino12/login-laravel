<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TestUser;
use Storage;
use Session;

class PostController extends Controller
{
    //
    public function userLogin(Request $request)
    {
    	# code...
    	return $request->all();
    }

    public function userSignup(Request $request, TestUser $data){
    	# code...
    	$data = new TestUser;
    	$data->name = $request->name;
    	$data->email = $request->email;
    	$data->password = $request->password;
    	$data->save();

    	//return back
        Session::flash('status', 'Thanks, you have successfully signup ATT'); 
    	return back();
    }
}

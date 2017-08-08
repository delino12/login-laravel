<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
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

    public function userSignup(Request $request, User $data){
    	# code...
    	$data = new User;
    	$data->name = $request->name;
    	$data->email = $request->email;
    	$data->password = $request->password;
    	$data->save();

    	//return back
        Session::flash('status', 'Thanks, you have successfully signup'); 
    	return back();
    }
}

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
    	# get all the request from login form
    	$email = $request->email;
    	$password = $request->password;

    	# check user if match with database user
    	$users = User::where('email', $email)->first();
    }

    public function userSignup(Request $request, User $data){
    	# code...
    	# get all the request from login form
    	$email = $request->email;

    	# check user if match with database user
    	$users = User::where('email', $email)->get();

    	# check if email is more than 1
    	if(sizeof($users) > 0){
    		# tell user not to duplicate same email
    		$msg = 'This user already signed up !';
			Session::flash('userExistError', $msg);
			return back();
    	}

		// create new files
		$data = new User;
		$data->name = $request->name;
		$data->email = $request->email;
		$data->password = md5($request->password);
		$data->save();

		//return back
		Session::flash('status', 'Thanks, you have successfully signup'); 
		Session::flash('name', $request->name);
    	
    	# after every logic redirect back
    	return back();
    }
}

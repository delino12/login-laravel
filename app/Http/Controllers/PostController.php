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
    	$password = md5($request->password);

    	# verify user exits
		# check user if match with database user
    	$users = User::where('email', $email)
    	->where('password', $password)
    	->get();

    	if(sizeof($users) == 0){
    		$msg = "Invalid username or password";
    		# return error sending messages
    		Session::flash('loginError', $msg);
			return back();
    	}else{
    		return "User is valid proccess login authentication";
    	}
    }

    public function userSignup(Request $request, User $data){
    	# check user if match with database user
    	$users = User::where('email', $request->email)->get();

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

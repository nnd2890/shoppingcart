<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function getSignup() {
    	return view('user.signup');
    }

    public function postSignup(Request $request) {
    	$this->validate($request, [
    		'email' => 'email|required|unique:users',
    		'password' => 'required|min:4'
    	]);

    	$user = new User([
    		'name' => $request->input('name'),
    		'email' => $request->input('email'),
    		'password' => $request->input('password')
    	]);

    	$user->save();

    	return redirect()->route('product.index');
    }

    public function getSignin() {
    	return view('user.signin');
    }

    public function postSignin(Request $request) {
    	$this->validate($request, [
    		'email' => 'email|required',
    		'password' => 'required|min:4'
    	]);

    	$email = $request->input('email');
	    $password = $request->input('password');

	    if (Auth::attempt(array('email' => $email, 'password' => $password)))
	    {
	        return redirect()->route('user.profile');
	    } else {
	        return redirect()->back();
	    }
    }

    public function profile() {
    	return view('user.profile');
    }
}

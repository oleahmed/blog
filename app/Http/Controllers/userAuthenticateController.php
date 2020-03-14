<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use Illuminate\Support\Facades\Auth;

class userAuthenticateController extends Controller
{
    public function index()
    {
        $post = Post::latest()->get();
    	return view('index',compact('post'));
    }


    public function showLogin()
    {
    	return view('user.login');
    }

    public function login()
    {
    		$this->validate(request(),[
    		'name'=>'required',
    		'password'=>'required'
    	]);

    	if(Auth::attempt(['name'=>request('name'), 'password'=>request('password')])){
    		return redirect()->route('data.show');

    	}else{
    		return redirect()->route('user.login.show')->with('regsuc','Username or Password is incorrect');
    	}
    }


     public function logout()
    {
    	Auth::logout();
    	return redirect()->route('user.login.show');
    }


    public function showRegister()
    {
    	return view('user.register');
    }

     public function register()
    {
    	$this->validate(request(),[
    		'name'=>'required|alpha_dash|unique:users,name',
    		'email'=>'required|email',
    		'password'=>'required|confirmed'
    	]);

    	User::create([
    		'name'=>request('name'),
    		'email'=>request('email'),
    		'password'=>bcrypt(request('password'))
    	]);

    	return redirect()->route('user.login.show')->with('regsuc','Successfully Registered');
    
    }
}

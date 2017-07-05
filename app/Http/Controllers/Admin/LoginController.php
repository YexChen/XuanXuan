<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
	use AuthenticatesUsers;

	public function __construct(){
		$this->middleware('guest:Admin',['except'=>'logout']);
	}

    public function showLoginForm(){
    	return view('Admin.Login');
    }

    public function username(){
    	return 'email';
    }

    protected $redirectTo = 'blogsControl';

    public function guard(){
    	return Auth()->guard('Admin');
    }

}

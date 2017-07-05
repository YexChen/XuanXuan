<?php
	
	namespace App\Http\Controllers\Users;
	use App\Http\Controllers\Controller;
	use Illuminate\Http\Request;
	use Illuminate\Foundation\Auth\AuthenticatesUsers;
	class LoginController extends AuthenticatesUsers{
		use AuthenticatesUsers;

		protected $redirectTo = '/users/dashboard';
		protected $username;

		public function __construct(){
			$this->middleware('guest:userguard',['except' => 'logout']);
		//	$this->$username = 
		}

		protected function guard(){
			return auth()->guard('userguard');
		}
	}
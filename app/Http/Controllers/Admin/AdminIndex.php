<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class AdminIndex extends Controller
{
    public function __construct(){
    	$this->middleware('auth.myadmin:Admin');
    } 

    public function showblogsControl(){
    	$data = DB::table('blogs')->get();
    	$names = DB::table('myusers')->get();
    	return view('blogsControl',compact('data','names'));
    }
}

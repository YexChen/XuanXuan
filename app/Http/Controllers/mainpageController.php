<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\blogs;

class mainpageController extends Controller
{
   public function index(){
   		$blogs = new blogs;
		$blogs = $blogs::all();
   		return view('mainpage')->withModel($blogs);
   }
}

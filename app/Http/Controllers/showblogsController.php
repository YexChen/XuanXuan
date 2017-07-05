<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class showblogsController extends Controller
{
    //以后会根据Auth获得用户并根据用户喜好进行筛选
    public function index($way='hot'){
    	if($way == 'hot'){
    		return view('showblogs_hot');
    }
    	if($way == 'new'){
    		return view('showblogs_new');
    	}

    }
}

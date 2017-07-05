<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\comments;
use Auth;
class commentController extends Controller
{
    public function __construct(){
    	$this->middleware('auth.myauth:usersguard');
    }

    public function create(Request $request,$blogs){
    	$this->validate($request,[
    	'summernote' => 'required',
    		]);

    	$user_id = Auth('usersguard')->user()->id;
    	$content = $request['summernote'];
    	$blogs_id = $blogs;

    	$comments = new comments;

    	$comments->user_id = $user_id;
    	$comments->content = $content;
    	$comments->blogs_id = $blogs_id; 

    	$comments->save();

    }
}

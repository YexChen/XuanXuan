<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\blogs;
use App\Models\comments;

use DB;

class blogsController extends Controller
{
    public function store(Request $request){
    	$this->validate($request,[
    		'title' => 'required|max:255',
    		'summernote' => 'required',
    		]);

    	$blogs = new blogs;

    	$blogs->title = $request['title'];
    	$blogs->content = $request['summernote'];
    	$blogs->author_id = Auth('usersguard')->user()->id;

    	$blogs->save();
    }

    public function show($page){
        //访客量+1,这一部分得大改，为了在多人同时访问时不出错，将会绑定在session里面并采用其他方法
        $blogs = new blogs;
        $views = $blogs->where('id',$page)->get();
        foreach($views as $key=>$d){
            $view = $d->views;
        }
        $view += 1;
        $blogs->where('id',$page)->update(['views'=>$view]);

        $data = DB::table('blogs')->where('id',$page)->get();
        $username = blogs::find($page)->user;
        $comments = new comments;
        $comments = $comments::all();

        return view('blogs',compact('data','username','page','comments'))->withModel($comments);
    }
    
    public function update($page){
        //返回修改视图,留到Alpha0.2
    }

    public function delete($page){
        $delete = blogs::find($page)->delete();
    }
}

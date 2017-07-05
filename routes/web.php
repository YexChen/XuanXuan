<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('homepage');
});

//主页、博客页面
Route::get('userhome',function(){
	return view('userhome');
})->middleware('auth');

Route::get('mainpage','mainpageController@index');

Route::get('blogs/{page}','blogsController@show');

Route::get('allblogs/{way?}','showblogsController@index');
//Route::get('blogs/{page}/update','blogsController@update')->middleware('auth.myadmin:Admin');
//Alpha0.2内容

Route::get('blogs/{page}/delete','blogsController@delete')->middleware('auth.myadmin:Admin');

//登陆界面（测试施工中）

Route::group(['middleware' => ['web']],function(){

Route::get('mylogin','myauth\LoginController@showLoginForm');

Route::get('myregist','myauth\RegistController@showRegistrationForm');

//测试的dashboard替代体，等会重做
//Route::get('myhome','myauth\HomeController@index');
Route::get('myhome',function(){
	return view('userhome');
})->middleware('auth.myauth:usersguard');


Route::post('myregist','myauth\RegistController@register');

Route::post('mylogin','myauth\LoginController@login');

Route::get('mylogout','myauth\LoginController@logout');


});

//博客测试页，后期需要通过验证才能用
Route::get('blogscreate',function(){
	return view('blogscreate');
});

Route::post('postblogs','blogsController@store')->middleware("auth.myauth:usersguard");

//后台登陆页面

Route::get('AdminLogin','Admin\LoginController@showLoginForm');

Route::get('AdminRegist','Admin\RegistController@showRegistrationForm');

//Alpha 0.1 版本暂时不做后台主控页面，留到Alpha0.2完成
Route::post('AdminLogin','Admin\LoginController@login');

Route::post('AdminRegist','Admin\RegistController@register');

Route::get('blogsControl','Admin\AdminIndex@showblogsControl');

//博客评论处理系统
Route::post('commentCreate/{blogs}','commentController@create');







































































































Route::group(['prefix' => 'test'],function(){
	Route::get('1',function(){
		return view('justtest.less');
	});
	Route::get('2',function(){
		return view('justtest.boot');
	});
	Route::get('3',function(){
		return view('justtest.redo');
	});
	Route::get('4',function(){
		return view('justtest.carousel');
	});
	Route::get('5',function(){
		return view('justtest.blog');
	});
	Route::get('6',function(){
		return view('justtest.controlpanel');
	});
	Route::get('7',function(){
		return view('justtest.login');
	});
});


Auth::routes();

Route::get('/home', 'HomeController@index');

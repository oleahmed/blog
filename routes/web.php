<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//user side login


Route::get('/login', 'userAuthenticateController@showLogin')->name('user.login.show');
Route::post('/login', 'userAuthenticateController@login')->name('user.login');
Route::get('/logout', 'userAuthenticateController@logout')->name('user.logout');
Route::get('/register', 'userAuthenticateController@showRegister')->name('user.register.show');
Route::post('/register', 'userAuthenticateController@register')->name('user.register');
Route::post('/register', 'userAuthenticateController@register')->name('user.register');

Route::group(['middleware'=>'userCheck'],function(){
	Route::get('/', 'userAuthenticateController@index')->name('data.show');
	Route::get('/post/{id}/show', 'userController@showPost')->name('user.post.show');
	Route::post('/post/{id}/comment', 'userController@comment')->name('user.post.comment');
	Route::post('/post/{id}/updateComment/{postId}', 'userController@updateComment')->name('user.post.edit');

});

//Admin routes

Route::get('/admin/login', 'adminController@showLogin')->name('admin.login.show');
Route::post('/admin/login', 'adminController@login')->name('admin.login');
Route::get('/admin/logout', 'adminController@logout')->name('admin.logout');


Route::group(['middleware'=>'adminCheck'],function(){
	Route::get('/admin/dashboard', 'adminController@index')->name('admin.dashboard');
	Route::get('/admin/create-post', 'adminController@showPost')->name('admin.post.show');
	Route::post('/admin/create-post', 'adminController@post')->name('admin.post');
	Route::get('/admin/show-post', 'adminController@showAllPost')->name('admin.comment');
	Route::get('/admin/{id}/updateAdmin', 'adminController@updateAdmin')->name('admin.update');

});





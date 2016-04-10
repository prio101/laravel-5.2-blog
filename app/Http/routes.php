<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'SiteController@index');

Route::get('/post/{id}' , 'SiteController@show');




Route::get('/admin' ,['middleware' => 'auth' , 'uses' => 'AdminController@index']);

Route::get('/admin/new' , ['middleware' => 'auth' , 'uses' => 'AdminController@create']);

Route::post('/admin/store' , ['middleware' => 'auth' , 'uses' => 'AdminController@store']);

Route::get('/admin/edit/post/{id}' , ['middleware' =>'auth' , 'uses' => 'AdminController@edit']);

Route::PATCH('/admin/edit/post/{id}' , ['middleware' => 'auth' , 'uses'=> 'AdminController@update']);

Route::DELETE('/admin/post/delete/{id}' , ['middleware' => 'auth' , 'uses' => 'AdminController@destroy']);

Route::auth();

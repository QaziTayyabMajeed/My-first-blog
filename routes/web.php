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
//Authentication Routes
   //Route::get('auth/login', 'Auth\LoginController@showLoginForm');﻿
   //Route::get('auth/login', 'Auth\LoginController@getLogin');
     //Route::post('auth/login', 'Auth\LoginController@login');
   //Route::get('auth/logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);

 //laravel 5.3


//Registration Routes
 //Route::get('auth/register', 'Auth\RegisterController@getRegister');
 //Route::post('auth/register', 'Auth\RegisterController@register');
 //laravel 5.3﻿

//Route::auth();
Route::group(['middleware' => ['guest']] , function(){
Route::get('/', 'HomeController@getIndex');
Route::get('/about', 'HomeController@getAbout');
Route::get('/contactme', 'HomeController@getContactme');

});
Route::group(['middleware' => ['auth']] , function(){
Route::get('/home','PageController@getIndex');
Route::get('blog/{slug}',['as' => 'blog.single','uses' => 'BlogController@getSingle'])->where('slug','[\w\d\-\_]+');
Route::get('/aboutme', 'PageController@getAboutme');
Route::get('/contact', 'PageController@getContact');
Route::resource('posts', 'PostController');
Route::get('blog',['uses' =>'BlogController@getIndex' , 'as' => 'blog.index']);
Route::get('logout',['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);

// Auth::logout();
});

Auth::routes();
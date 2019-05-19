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

Route::get('/', 'PagesControler@home');

Route::get('/dashboard','PagesControler@dashboard');

Route::get('/product','PostControler@index');

Route::get('/stat','PagesControler@stat');

Route::resource('posts','PostControler');

Auth::routes();

Route::get('/home', 'HomeController@index');





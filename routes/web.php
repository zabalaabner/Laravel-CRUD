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

//Example of a Route
Route::get('/index','laravelcontroller@startindex');
Route::post('/process-registration','laravelcontroller@processRegistration');


Route::group(['middleware' => ['web']], function(){
	
	Route::resource('blog','BlogController');
});

Route::group(['middleware' => ['web']], function(){
	
	Route::resource('Finalproject','projectcontroller');
});
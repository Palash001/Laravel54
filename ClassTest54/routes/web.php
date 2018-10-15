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

Route::get('/', function () {
    return view('welcome');
});






Route::group(['prefix'=>'Front','namespace'=>'FrontEnd'],function()

{

	//Route::get('user/','UserController@userMethod');

	Route::get('/','frontController@homeMethod')->name('index');

	Route::get('blg/','frontController@blgMethod')->name('blog');

	Route::get('cont/','frontController@contMethod')->name('contact');

	Route::get('port/','frontController@portMethod')->name('portfolio');


	Route::get('ser/','frontController@serMethod')->name('service');

});
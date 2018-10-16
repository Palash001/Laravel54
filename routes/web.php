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



Route::group(['prefix'=>'Back','namespace'=>'BackEnd'],function()

{


Route::get('/','backController@homeMethod')->name('ind');

Route::get('for/','backController@errorMethod')->name('error');

Route::get('basic/','backController@basicMethod')->name('basic');

Route::get('chart/','backController@chartMethod')->name('chart');

Route::get('drop/','backController@dropMethod')->name('dropzone');

Route::get('flot/','backController@flotMethod')->name('flot_chart');

Route::get('font/','backController@fontMethod')->name('fontawesome');

Route::get('form_com/','backController@formMethod')->name('form_com');

Route::get('form_val/','backController@forMethod')->name('form_val');

Route::get('gall/','backController@gallMethod')->name('gallery');

Route::get('glyph/','backController@glyphMethod')->name('glyphicon');

Route::get('google/','backController@googMethod')->name('google');

Route::get('grids/','backController@gridMethod')->name('grids');

Route::get('login/','backController@logMethod')->name('login');

Route::get('mail/','backController@mailMethod')->name('mail');

Route::get('mail_com/','backController@mailComMethod')->name('mail_com');

Route::get('registraion/','backConttroller@regMethod')->name('registration');

Route::get('reponsive/','backController@resMethod')->name('responsive');

Route::get('typhograpghy/','backController@typMethod')->name('typography');

Route::get('vector/','backController@vecMethod')->name('vector');



});


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


Route::get('/simulator', 'PagesController@Simulator' );
Route::get('/', 'PagesController@Step1' );
Route::get('/continuer', 'PagesController@Continuer' );

Route::post('store', 'DdpController@store');

Route::get('/welcome', function () {
    return view('welcome');
});


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

Route::get('/', function () {
    return view('welcome');
});
Route::get('sellos', 'SellosController@index');
Route::get('sellos', 'SellosController@store');
Route::get('sellos', 'SellosController@create');
Route::get('sellos', 'SellosController@edit');
Route::get('sellos', 'SellosController@update');
Route::get('sellos', 'SellosController@distroy');
Route::get('sellos', 'SellosController@show');






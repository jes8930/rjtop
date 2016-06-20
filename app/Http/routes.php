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
Route::get('sellos/store', 'SellosController@store');
Route::get('sellos/create', 'SellosController@create');
Route::get('sellos/edit', 'SellosController@edit');
Route::get('sellos/update', 'SellosController@update');
Route::get('sellos/destroy', 'SellosController@destroy');
Route::get('sellos/show', 'SellosController@show');






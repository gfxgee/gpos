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

Route::get('/', 'HomeController@index' );

Route::auth();

Route::get('/dashboard', 'HomeController@index');

Route::get('/setting', 'HomeController@setting');

Route::get('/customers', 'CustomerController@index');
Route::get('/customers/add', 'CustomerController@add');

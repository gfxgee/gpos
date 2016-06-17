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

/* Customers */
Route::get('/customers', 'CustomerController@index');
Route::get('/customers/add', 'CustomerController@add');
Route::post('/customers/add', 'CustomerController@insert');
Route::get('/customers/edit/{id}', 'CustomerController@edit');
Route::put('/customers/edit/{id}', 'CustomerController@update');

/* Items */

Route::get('/items','ItemsController@index');
Route::get('/items/add','ItemsController@add');

/*Route::post('/customers/insert', function(){
	var_dump($_POST);
});*/

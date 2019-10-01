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
Route::get('/', 'HomeController@index');

// Applying middleware "checkedAge" to the age/{age} route
Route::get('/age/{age?}', 'HomeController@age')->middleware('checkedAge');

// Creating a route for the hello first_name blade page
Route::get('/hello/{first_name}', 'HomeController@hello');

Route::post('/korisnici', 'HomeController@create');

Route::put('/korisnici1','HomeController@update');

Route::patch('/korisnici2', 'HomeController@edit');

Route::delete('/users/{id}', 'HomeController@destroy');
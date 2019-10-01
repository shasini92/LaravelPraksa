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

// Applying middleware "checkedAge" to the age/{age} route
Route::get('/age/{age?}', function ($age) {
    return "You're ${age} years old.";
})->middleware('checkedAge');

Route::post('/korisnici', function () {
    return 'Post request';
});

Route::put('/korisnici1',function () {
    return 'Pozdrav';
});

Route::patch('/korisnici2', function () {
    return 'Pozdrav';
});

Route::delete('/users/{id}',  function ($id) {
    return "Srbija";
});
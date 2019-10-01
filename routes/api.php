<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/praksa', function () {
    return 'Pozdrav';
});

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

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

Route::auth();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/member', function () {
    return view('member/index');
});

Route::get('/bistro', 'Bistro@index');
Route::post('/bistro', 'Bistro@store');
Route::delete('/bistro/{bistro}', 'Bistro@destroy');

Route::get('/member', 'Member@index');
Route::post('/member', 'Member@store');
Route::delete('/member/{member}', 'Member@destroy');
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
    $name = '和順國小';
    $say  = '您好.。嗨！';
    return view('welcome', compact('name', 'say'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

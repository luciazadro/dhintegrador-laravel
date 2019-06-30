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
    return view('home');
});

Auth::routes();

// HOME

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about', 'HomeController@about');
Route::get('/contact', 'HomeController@contact');
Route::post('/contact', 'HomeController@store');
Route::get('/perfil', 'HomeController@perfil');
Route::get('/perfil_adm', 'HomeController@perfil');


// USERS

Route::group(['prefix' => 'user'], function() {
    Route::get('/profile', 'UserController@profile');
    Route::get('/create', 'UserController@create');
    Route::post('/create', 'UserController@store');
    Route::get('/login', 'UserController@login');
    Route::get('/logout', 'UserController@logout');
});


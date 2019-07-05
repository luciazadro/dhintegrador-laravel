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
Route::get('/formulario', 'HomeController@contact');
Route::post('/contact', 'HomeController@store');
Route::get('/perfil', 'HomeController@perfil');
Route::get('/perfilAdm', 'HomeController@perfilAdm');


// USERS 
Route::get('/users/index', 'UsersController@index');
Route::get('/users/show', 'UsersController@show');
Route::put('/users/update', 'UsersController@eupdate');
Route::put('actualizar-usuario/{usuario}', 'UsersController@update');
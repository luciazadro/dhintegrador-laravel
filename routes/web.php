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

// Home
Route::group(['prefix' => 'home'], function() {
        Route::get('/', 'HomeController@index');
        Route::get('/about', 'HomeController@about');
        Route::get('/contact', 'HomeController@contact');
        Route::post('/contact', 'HomeController@store');
});


// Users
Route::group(['prefix' => 'user'], function() {
        Route::get('/profile', 'UserController@profile');
        Route::get('/create', 'UserController@create');
        Route::post('/create', 'UserController@store');
        Route::get('/login', 'UserController@login');
        //trngo que hacer un route post para hacer el login???
        Route::get('/logout', 'UserController@logout');
});

// Products
Route::group(['prefix' => 'product'], function() {
    Route::get('/', 'ProductController@index');
    Route::get('/create', 'ProductController@create');
    Route::post('/create', 'ProductController@store');
    Route::get('/cart', 'ProductController@cart');
    Route::get('/{id}', 'ProductController@show');
    Route::get('/{id}/update', 'ProductController@edit');
    Route::put('/{id}/update', 'ProductController@update');
    Route::get('/delete', 'ProductController@delete');

});
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
Route::get('/users/edit', 'UsersController@edit');
Route::put('/users/edit', 'UsersController@edit');
Route::put('/users/update', 'UsersController@eupdate');
Route::put('actualizar-usuario/{usuario}', 'UsersController@update');

// PRODUCTOS
Route::get('/products', 'ProductController@index');
Route::get('/products/create', 'ProductController@create');
Route::post('/products/create', 'ProductController@store');
Route::get('/products/{id}', 'ProductController@show');
Route::get('/products/{id}/update', 'ProductController@edit');
Route::patch('/products/{id}/update', 'ProductController@update');

// CATEGORIAS
Route::get('/categories', 'categoryController@index');
Route::get('/categories/{id}/products', 'categoryController@showProducts');
Route::get('/categories/{id}', 'categoryController@show');
Route::get('/categoriescreate', 'categoryController@create');
Route::post('/categories/create', 'categoryController@store');

// ORDERS
Route::get('/oders/index', 'OrderController@index');


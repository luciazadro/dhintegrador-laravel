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
Route::get('/users/edit', 'UsersController@edit')->name('users.edit');
Route::put('/users/edit', 'UsersController@edit');
Route::put('/users/update', 'UsersController@update');
Route::put('actualizar-usuario/{usuario}', 'UsersController@update');

// PRODUCTOS
Route::get('/products', 'ProductController@index');
Route::get('/products/create', 'ProductController@create')->name('products.create');
Route::post('/products/create', 'ProductController@store');
Route::get('/products/show','ProductController@show');
Route::get('/products/edit/{id}','ProductController@edit')->name('products.edit');
Route::put('/products/edit/{id}/update', 'ProductController@update')->name('products.update');;
Route::patch('/products/destroy', 'ProductController@destroy')->name('products.destroy');
Route::get('products/search', 'ProductController@search')->name('products.search');

// CATEGORIAS
Route::get('/categories', 'categoryController@index');
Route::get('/categories/{id}/categories', 'categoryController@showProducts');
Route::get('/categories/{id}', 'categoryController@show');
Route::get('/categories/create', 'categoryController@create')->name('categories.create');
Route::get('categories/edit', 'categoryControllerController@edit')->name('categories.edit');
Route::get('categories/destroy', 'ProductController@edit')->name('categories.detroy');
Route::post('/categories/create', 'categoryController@store');

// ORDERS
Route::get('/oders/index', 'OrderController@index');

// CARRITO
Route::group(['prefix' => 'carrito'], function() {
    Route::get('/', 'CartController@index')->name('carrito');
    Route::get('/add/{id}', 'CartController@add')->name('carrito.add');
    Route::get('/remove/{id}', 'CartController@remove');
    Route::get('/checkout', 'CartController@checkout');
    Route::get('/flush', 'CartController@flush');
}
);



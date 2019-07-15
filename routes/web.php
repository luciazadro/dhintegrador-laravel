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
Route::get('/perfilAdm', 'HomeController@perfilAdm')->middleware('admin');

// USERS 
Route::get('/users/index', 'UsersController@index')->name('users.index');
Route::get('/users/show/{id}', 'UsersController@show')->name('users.show');
Route::get('/users/edit/{id}', 'UserController@edit')->name('users.edit')->middleware('admin');
Route::put('/users/{id}/update', 'UserController@update');
Route::get('users/destroy/{id}', 'UserController@destroy')->name('users.detroy');


// PRODUCTOS
Route::get('/products', 'ProductController@index')->name('products');
Route::get('/products/create', 'ProductController@create')->name('products.create');
Route::post('/products/create', 'ProductController@store');
Route::get('/products/show','ProductController@show'); /* me parece que es redudante esta ruta */
Route::get('/products/{id}/update','ProductController@edit')->name('products.edit')->middleware('admin');
Route::put('/products/{id}/update', 'ProductController@update')->name('products.update');
Route::patch('/products/{id}/destroy', 'ProductController@destroy')->name('products.destroy')->middleware('admin');
Route::post('products/search', 'ProductController@search')->name('products.search');

// CATEGORIAS
Route::get('/categories', 'CategoryController@index')->name('categories');
Route::get('/categories/{id}', 'CategoryController@show')->name('categories.show');
Route::get('/categories/create', 'CategoryController@create')->name('categories.create')->middleware('admin');
Route::post('/categories/create', 'CategoryController@store');
Route::get('categories/{id}/update', 'CategoryControllerController@edit')->name('categories.edit')->middleware('admin');
Route::put('/categories/{id}/update', 'CategoryController@update')->name('categories.update');
Route::get('categories/destroy', 'CategoryController@edit')->name('categories.detroy')->middleware('admin');

// ORDERS
Route::get('/oders/index', 'OrderController@index');

// CARRITO
Route::group(['prefix' => 'carrito'], function() {
    Route::get('/', 'CartController@index')->name('carrito');
    Route::get('/add/{product_id}', 'CartController@add')->name('carrito.add');
    Route::get('/remove/{product_id}', 'CartController@remove')->name('carrito.remove');
    Route::get('/checkout', 'CartController@checkout')->name('carrito.checkout');
    Route::get('/flush', 'CartController@flush')->name('carrito.flush');
}
);



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

Route::get('category/{category}', 'CategoriesController@getCategory');

Route::get('category/{category}/{subCategory}', 'CategoriesController@getSubCategory');

Route::get('product/{product}', 'ProductsController@getProduct');

Route::get('user/admin', 'UsersController@showAdminPanel');

Route::get('user/admin/listar', 'UsersController@listar');

Route::get('user/admin/nuevoproducto', 'UsersController@nuevoProducto');
Route::post('user/admin/nuevoproducto', 'UsersController@addProduct');
Route::get('user/admin/editarproducto/{id}', 'UsersController@editarProducto');
Route::put('user/admin/editarproducto/{id}', 'UsersController@editProduct');


Route::get('carrito/borrar/{id}', 'CarritoController@delCarrito');

Route::post('session', 'AddToCartController@addToSession');

Route::get('xs', 'AddToCartController@viewSession');

Route::get('carrito/{id}', 'CarritoController@addCarrito');
Route::get('carrito', 'CarritoController@getCarrito');



Auth::routes();

Route::get('/', 'HomeController@index');

Route::get('/home', 'HomeController@index')->name('home');
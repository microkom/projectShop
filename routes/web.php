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

Route::get('/', 'HomeController@getHome');

Route::get('category/{category}', 'CategoryController@getCategory');

Route::get('category/{category}/{subCategory}', 'CategoryController@getSubCategory');

Route::get('product/{product}', 'ProductController@getShow');

Route::get('carrito/borrar/{id}', 'CarritoController@delCarrito');
Route::get('carrito/{id}', 'CarritoController@addCarrito');
Route::get('carrito', 'CarritoController@getCarrito');

Route::any('/search',function(){
    $q = Input::get ( 'q' );
    $product = Products::where('name','LIKE','%'.$q.'%')->orWhere('description','LIKE','%'.$q.'%')->get();
    if(count($product) > 0)
        return view('welcome')->withDetails($product)->withQuery ( $q );
    else return view ('welcome')->withMessage('No Details found. Try to search again !');
});
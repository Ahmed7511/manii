<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use app\Http\Controller\productController ;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/logout', 'App\Http\Controllers\homeController@logout');

 //products
 Route::get('products', 'App\Http\Controllers\ProductController@getall');
 Route::get('products/{id}', 'App\Http\Controllers\ProductController@getone');
 Route::post('products', 'App\Http\Controllers\ProductController@post');
 Route::put('products/{id}', 'App\Http\Controllers\ProductController@put');
 Route::delete('products/{id}', 'App\Http\Controllers\ProductController@delete');
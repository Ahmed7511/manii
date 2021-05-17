<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\controllers\adminController ;
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
    return view('Accueil');
});
Route::get('/prestations', function () {
    return view('prestations');
});
Route::get('/Actualité', function () {
    return view('Actualité');
});

Route::get('/contact', function () {
    return view('contact');
});
Auth::routes();





Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::group(['middleware' => ['auth']], function () {
    Route::get('Galerie', [App\Http\Controllers\productController::class, 'getAll']);
    Route::get('Galerie/product/{id}', [App\Http\Controllers\productController::class, 'getOne']);
    //Route::post('Galerie/product/{id}', [App\Http\Controllers\CartController::class, 'add'] );  
    Route::post('Galerie/panier', [App\Http\Controllers\CartController::class, 'add'] )->name('user.panier');  
    Route::get('Galerie/panier', [App\Http\Controllers\CartController::class, 'getAll'] );
});
Route::group(['middleware' => ['auth' ,'role:admin']], function () {
Route::get('/admin', [App\Http\Controllers\adminController::class, 'index'])->name('admin.index');
Route::post('/admin', [App\Http\Controllers\adminController::class, 'store'])->name('admin.index');
Route::get('/update-product/{id}', [App\Http\Controllers\adminController::class, 'getOne'])->name('admin.update-product');
Route::get('/delete-product/{id}', [App\Http\Controllers\adminController::class, 'delete'])->name('admin.delete-product');
Route::post('/edit-product/{id}', [App\Http\Controllers\adminController::class, 'update'])->name('admin.edit-product');
});
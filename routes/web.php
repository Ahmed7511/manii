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
Route::get('/Galerie', function () {
    return view('Galerie');
});
Route::get('/update-product', function () {
    return view('update-product');
});
Route::get('/contact', function () {
    return view('contact');
});
Auth::routes();


// Route::prefix('/admin')->namespace('App\Http\Controllers\Admin')->group(function(){
// //'store' => 'admin.store' ;
// Route::post('/admin', 'adminController@store');
//   });
Route::get('/admin', [App\Http\Controllers\adminController::class, 'index'])->name('admin.index')->middleware('role:admin');
Route::post('/admin', [App\Http\Controllers\adminController::class, 'store'])->name('admin.index')->middleware('role:admin');
Route::get('/update-product/{id}', [App\Http\Controllers\adminController::class, 'getOne'])->name('admin.update-product')->middleware('role:admin');
Route::get('/delete-product/{id}', [App\Http\Controllers\adminController::class, 'delete'])->name('admin.delete-product')->middleware('role:admin');
Route::get('/edit-product/{id}', [App\Http\Controllers\adminController::class, 'put'])->name('admin.edit-product')->middleware('role:admin');
Route::get('/Galerie', [App\Http\Controllers\productController::class, 'getAll'])->name('user.Galerie');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
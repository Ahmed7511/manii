<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('layouts.nav');
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

Route::get('/admin', [App\Http\Controllers\adminController::class, 'index'])->name('admin.index')->middleware('role:admin');
Route::get('/Galerie', [App\Http\Controllers\HomeController::class, 'index'])->name('Galerie');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
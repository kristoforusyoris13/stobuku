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
    return view('welcome');
});
Route::resource('admin/buku', 'Admin\\bukuController');
Route::resource('admin/posts', 'Admin\\PostsController');

Auth::routes();


Route::get('/', 'Admin\\bukuController@index');
Route::resource('admin/penerbit', 'Admin\\penerbitController');
Route::get('admin/buku', 'Admin\\bukuController@index');
Route::resource('admin/stok', 'Admin\\stokController');
<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/home', function () {
    return view('home');
})->name('home');
Route::resource('/category', 'CategoryController');
Route::resource('/tag', 'TagController');
Route::get('/post/tampil_hapus', 'PostController@tampil_hapus')->name('post.tampil_hapus');
Route::get('/post/restore/{id}','PostController@restore')->name('post.restore');
Route::delete('/post/kill/{id}','PostController@kill')->name('post.kill');
Route::resource('/post', 'PostController');


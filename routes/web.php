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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard')->middleware('auth');
Route::get('/articles', 'HomeController@articles')->name('articles');

// Route::resource('/dashboard/posts', PostController::class);
Route::get('/dashboard/posts', 'PostController@index')->middleware('auth');
Route::get('/dashboard/posts/create', 'PostController@create')->middleware('auth');
Route::post('/dashboard/posts/store', 'PostController@store')->middleware('auth');
Route::get('/dashboard/posts/edit/{id}', 'PostController@edit')->middleware('auth');
Route::put('/dashboard/posts/update/{id}', 'PostController@update')->middleware('auth');
Route::delete('/dashboard/posts/delete/{id}', 'PostController@delete')->middleware('auth');
Route::get('/dashboard/posts/{id}', 'PostController@show')->middleware('auth');
Route::get('/article/single/{id}', 'PostController@single');

Route::get('/guestcategories/{id}', 'CategoryController@show')->middleware('auth');
Route::get('/guestcategories/{id}', 'CategoryController@guest');

<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/Profile', 'App\Http\Controllers\ProfileController@index')->name('profile');

Route::get('/posts', 'App\Http\Controllers\PostController@index')->name('allposts');

Route::get('/dashbord', 'App\Http\Controllers\DashbordController@index')->name('dashbord');
Route::post('store', 'App\Http\Controllers\PostController@store')->name('ajax.store');



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

Route::get('/', 'HomeController@hello');

Route::get('/admin', 'Admin\UserController@index')->middleware('verified');
Route::post('/admin/users', 'Admin\UserController@store')->name('users.store');
Route::delete('admin/users/{user}', 'Admin\UserController@destroy')->name('users.destroy');


Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');



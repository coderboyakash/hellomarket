<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Auth\Events\Login;

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

Route::resource('/','UsersController');
Route::get('/register','UsersController@register')->name('register');
Route::post('/login','UsersController@login')->name('login');

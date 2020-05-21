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

// вход в логин
Route::post('/generateCodeLogin', 'SmsController@generateCodeLogin');
Route::post('/checkCodeLogin', 'LoginmyController@checkCodeLogin');
// выбор роли
Route::post('/checkRole', 'LoginmyController@checkRole');
Route::get('/setLng', 'Auth\LoginController@setLng');

Route::get('/', 'Auth\LoginController@showLoginForm')->name('login');

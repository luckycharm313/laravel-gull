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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', 'LandingController@index')->name('landing');
Route::get('/login', 'AuthController@login')->name('login');
Route::post('/signin', 'AuthController@signin')->name('signin');
Route::get('/register', 'AuthController@register')->name('register');
Route::post('/signup', 'AuthController@signup')->name('signup');
Route::get('/vehicle', 'VehicleController@index')->name('vehicle');
Route::get('/addLocation', 'VehicleController@addLocation')->name('addLocation');
Route::get('/account', 'AccountController@index')->name('account');
Route::get('/load', 'LoadController@index')->name('load');
Route::get('/notification', 'NotificationController@index')->name('notification');
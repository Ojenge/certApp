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

Auth::routes();

Route::get('/home', 'DashboardController@index')->name('home');

Route::resource('/certificates', 'CertificatesController');
Route::resource('/dashboard', 'DashboardController');

Route::get('certificates/generate_certificate/{student_id}', 'CertificatesController@generate_certificate')->name('generate');
//Route::get('user/profile', 'UserController@showProfile')->name('profile');
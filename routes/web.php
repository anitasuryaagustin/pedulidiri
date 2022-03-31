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
    return view ('auth.login');
});

//perjalanan
Route::get('/perjalanan','PerjalananController@index')->name('perjalanan');
Route::get('/perjalanan/create','PerjalananController@create');
Route::post('/perjalanan/store','PerjalananController@store');
Route::get('/perjalanan/edit/{id}','PerjalananController@edit');
Route::put('/perjalanan/update/{id}', 'PerjalananController@update');
Route::get('/perjalanan/delete/{id}', 'PerjalananController@destroy');

Auth::routes();

// Route::get('/home', 'HomeController')->name('home');
// Route::get('/register', 'RegisterController')->name('regsiter');

//user
Route::get('/user', 'UserController@index');
Route::get('/user/create', 'UserController@create');
Route::post('/user/store','UserController@store');
Route::get('/user/edit/{id}','UserController@edit');
Route::post('/user/update/{id}', 'UserController@update');
Route::get('/user/delete/{id}', 'UserController@destroy');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile','ProfileController@index');
Route::get('/profile/delete/{id}', 'ProfileController@destroy');

Route::get('/logout','UserController@logout');

Route::get('/kota', 'KotaController@index');
Route::get('/kota/create','KotaController@create');
Route::post('/kota/store','KotaController@store');
Route::get('/kota/edit/{id}','KotaController@edit');
Route::put('/kota/update/{id}','KotaController@update');
Route::get('/kota/delete/{id}','KotaController@destroy');

Route::get('/admins', 'UserController@indexadmin');
Route::get('/admins/delete/{id}', 'UserController@destroyadmin');
Route::get('/admins/cetak_pdf', 'UserController@cetak_pdf');





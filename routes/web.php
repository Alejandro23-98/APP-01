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

Route::get('/home', 'HomeController@index')->name('home');
Route::namespace('contador')->group(function () {
    Route::get('nuevoServicio', 'servicioController@showServicioForm')->name('nuevoServicio');
    Route::get('editServicio', 'servicioController@showEditServicioForm')->name('editServicio');
    Route::get('subscritores', 'detallesSubscritoresController@showSubcritores')->name('subscritores');
});
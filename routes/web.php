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

//Ruta por defecto
//Route::get('/', function () {
//    return view('welcome');
//});

//Ruta por defecto con controlador
Route::get('/', 'Noticias@mostrar');


Auth::routes();

Route::get('/home', 'HomeController@index');


/// Noticias

Route::resource('/noticias','Noticias');


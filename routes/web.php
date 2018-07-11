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
/*inicialmente crea esta funsion que resuleve la ruta por una funsio anonima*/
/*
Route::get('/', function () {
    return view('welcome');
});
*/
/* modificamos para que la ruta sea resuelta por un contralador que tiene su
| metodo Welcome, la ruta se esta asociando con el controlador TestController
| que asu ves tiene un metodo welcome, que devuelve una vita llamada welcome
|
*/
Route::get('/', 'TestController@welcome');
/*
| creado autamaticamente cuando creamos autenticacion
*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

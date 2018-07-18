<?php
use App\Product;
use App\Category;
use App\ProductImage;

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

Route::get('/p', function () {
    $prod =Product::first();

    return 'Producto <br>'.$prod->category;
});
//retorna los productos de una determinada categoria y los cuenta
Route::get('/c', function () {
    $cat = Category::first();
    // $pro almacena todos los productos de la primera categ
    $pro=$cat->products;
    // $cantP cantidad de productos en la primera categoria
    $cantP=$cat->products()->count();
    // return 'Cantidad de Producto <br>'.$cat.'<br><br>los p'.$pro;
    return 'Cantidad de Producto <br>'.$cantP;
});

//retorna los productos de una determinada categoria y los cuenta
Route::get('/i', function () {
    $img = ProductImage::first();
    // $pro almacena el objeto productos que tiene la primera imagen
    $pro=$img->product;
    return 'Id del Producto <br>'.$pro->id;
});

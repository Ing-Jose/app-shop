<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
class TestController extends Controller
{
    //para que devueva la vista
    public function welcome(){
      //probando
      /*$a=5;
      $b=3;
      $c=$a+$b;
      return ('El valor de la suma es '.$c);*/
      /**
       * vamos hacer una consulta a la db con Eloquent
       * para traer toda la info de la base de datos
       * utilizando un metodo de Eloquent all()
       */
      // $products=Product::all();
      $products=Category::all();
      /**
       * para inyectoar una variable a una vista
       * utilizamos ->whict(dts), esto nos devuelve
       * la vista welcome con los datos que le inyectomos
       * compact() nos devuelve un arreglo asociativo con
       * los datos que le pasamos, esto nos permitira en
       * la vista welcome utilizar esa variable
       */
      return view('Welcome')->with(compact('products'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //para que devueva la vista
    public function welcome(){
      //probando
      /*$a=5;
      $b=3;
      $c=$a+$b;
      return ('El valor de la suma es '.$c);*/
      return view('Welcome');
    }
}

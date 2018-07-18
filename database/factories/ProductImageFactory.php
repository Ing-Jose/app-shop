<?php

use Faker\Generator as Faker;
use App\ProductImage;

$factory->define(ProductImage::class, function (Faker $faker) {
    return [
      /**
       * imageUrl($width = 640, $height = 480)
       * obtiene la imagen de 'http://lorempixel.com/640/480/'
       */
        'image'=>$faker->imageUrl(250, 250),
        /*para generar los numeros de los id de productos
        numberBetween($min = 1000, $max = 9000) // 8567 */
        'product_id'=>$faker->numberBetween(1, 50)
    ];
});

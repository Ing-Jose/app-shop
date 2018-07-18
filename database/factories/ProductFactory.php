<?php

use Faker\Generator as Faker;
use App\Product;
//
/**
 * genera una palabra de tres letras
 * //randomFloat($nbMaxDecimals = NULL, $min = 0, $max = NULL) // 48.8932
 * @var [type]
 * para generar los numeros de los id de las categoria
 * numberBetween($min = 1000, $max = 9000) 8567
 */


$factory->define(Product::class, function (Faker $faker) {
    return [
        'name'=>substr($faker->sentence(3), 0, -1),
        'description'=>$faker->sentence(10),
        'long_description'=>$faker->text,
        'price'=>$faker->randomFloat(2, 5, 150),
        'sale_price'=>$faker->randomFloat(2, 10, 350),
        'category_id'=>$faker->numberBetween(1, 5)
    ];
});

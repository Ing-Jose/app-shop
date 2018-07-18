<?php

use Illuminate\Database\Seeder;
use App\ProductImage;

class ProductImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //llamamos a la fabrica de dts para la tabla categoria
      //llenara la tabla con 10 datos
      factory(ProductImage::class, 200)->create();
    }
}

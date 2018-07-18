<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
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
      factory(Product::class, 50)->create();
    }
}

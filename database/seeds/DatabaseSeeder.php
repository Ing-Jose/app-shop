<?php

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //para llamar al seeder que crea el usuario con los dts en la db
        $this->call(UsersTableSeeder::class);
        // llamamos a los seeder de categoria
        $this->call(CategoriesTableSeeder::class);
        // llamamos a los seeder de productos
        $this->call(ProductsTableSeeder::class);
        // llamamos a los seeder de ProductImage
        $this->call(ProductImagesTableSeeder::class);

    }
}

<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     /**
      * create([arreglo asociativo])
      * con los datos que un suario necesita
      * bcrypt() para encriptar la contraseña
      */
    public function run()
    {
        //crear usuario
        User::create([
          'name'=>'Jose R',
          'email'=>'ing.jcarreno@gmail.com',
          'password'=>bcrypt('123456')
        ]);
        // User::create([
        //   'name'=>'Jose',
        //   'email'=>'ing.jcarreno@gmail.com',
        //   'password'=>bcrypt('123456')
        // ]);
    }
}

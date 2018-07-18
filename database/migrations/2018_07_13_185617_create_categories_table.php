<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations. metodo que contien
     * los cambios que esta migracion va hacer
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            // crea una columna auto incremental y la llave de la tabla
            $table->increments('id');
            // crea una columna que almacenara el nombre de la categoria
            $table->string('name');
            // crea una columna que almacenara la descripcion de la categoria
            // ->nullable($value = true) Permite (por defecto) valores NULL para ser insertados en la columna
            $table->string('description')->nullable();
            // almacenara la el nombre de imagen de la categoria opsional puede quedar null
            $table->string('imagen')->nullable();
            /* crea dos columna llamadas create_at y update_at
            |* para guardar cuando fue la fecha que se creo una
            |* categoria y cuando fue su ultima actualizacion
            */
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}

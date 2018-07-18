<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
  /**
   * Run the migrations. metodo que contien
   * los cambios que esta migracion va hacer
   * @return void
   */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            // crea una columna auto incremental y la llave de la tabla
            $table->increments('id');
            // crea una columna que almacenara el nombre del producto
            $table->string('name');
            // crea una columna que almacenara la descripcion de la producto
            // ->nullable($value = true) Permite (por defecto) valores NULL para ser insertados en la columna
            $table->string('description')->nullable();
            // almacenara la descripcion larga  del producto
            $table->text('long_description')->nullable();
            // almacenara el precio del producto
            $table->float('price');
            // almacenara el precio de venta del producto
            $table->float('sale_price');

            /* campo para almacenar el id de la categoria a
             * la que pertenece el producto, llave foranea
             * */
            $table->unsignedInteger('category_id');//crea una columna de tipo entero sin signo
            //creando la llave foranea para hacer referencia a la tabla categoria
            $table->foreign('category_id')->references('id')->on('categories');
            // almacenara la el nombre de imagen del producto opsional puede quedar null
            $table->string('imagen')->nullable();
            /* crea dos columna llamadas create_at y update_at
            |* para guardar cuando fue la fecha que se creo un
            |* producto y cuando fue su ultima actualizacion
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
        Schema::dropIfExists('products');
    }
}

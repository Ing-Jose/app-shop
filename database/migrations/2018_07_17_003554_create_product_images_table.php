<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_images', function (Blueprint $table) {
            $table->increments('id');
            //esta colunma guardara la ruta de la imagen para que el proyecto lo
            //pueda buscar y mostrarla
            $table->string('image');
            /* esta colunma es para clasificar las imagen 
            *  sera destacada o no trueo false, por default
            *  sera false, para que el usuario escoja que
            *  imagenes mostrara
            */
            $table->boolean('featured')->default(false);

            /* campo para almacenar el id del producto a
             * la que pertenece el la imagen, llave foranea
             * cada producto podra tener varias imagenes
             * */
            $table->unsignedInteger('product_id');//crea una columna de tipo entero sin signo
            //creando la llave foranea para hacer referencia a la tabla producto
            $table->foreign('product_id')->references('id')->on('products');

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
        Schema::dropIfExists('product_images');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  /**
   * para definir la relacion que existe entre
   * productos y categoria. 1 a 1. este metodo
   * nos permite desde el objeto especifico de
   * un producto saber que categoria pertenece
   * @return
   */
  public function category() {
    // $products->category
    return $this->belongsTo(Category::class);
  }
  /**
   * para definir la relacion que existe entre
   * productos y imagen. 1 a mucho. este metodo
   * nos permite desde el objeto especifico de
   * un producto saber cuantas imagenes tiene
   */
  public function images() {
    // $products->images
    return $this->hasMany(ProductImage::class);
  }
}

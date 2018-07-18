<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
  /**
   * para definir la relacion que existe entre
   * imagen y producto. uno a uno. este metodo
   * nos permite desde el objeto especifico de
   * una imagen saber a que producto pertenece
   */
   public function product() {
     // $productImage->product
     return $this->belongsTo(Product::class);
   }
}

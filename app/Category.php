<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * para definir la relacion que existe entre
     * categoria y productos. 1 a muchos. este metodo
     * nos permite desde el objeto category saber que
     * producto tiene este objeto asignado
     * @return
     */
    public function products() {
      // $category->products
      return $this->hasMany(Product::class);
    }
    
}

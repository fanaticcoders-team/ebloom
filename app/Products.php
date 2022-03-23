<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    public function attributes(){
        return $this->hasMany('App\ProductsAttributes','product_id');
    }
    public function occasion(){
        return $this->belongsTo('App\Occasion');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Florist extends Model
{
    public function charges(){
        return $this->hasMany('App\ShippingCharges','florist_id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    function getPrice(){
    	$formatedPrice = number_format($this->price,0,',','.');
    	return $formatedPrice . "VND";
    }
    public function products(){
        return $this->belongsTo("App\Product", "product_id", "id");
    }
}

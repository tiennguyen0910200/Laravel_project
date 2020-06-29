<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    function getPrice(){
    	$formatedPrice = number_format($this->price,0,',','.');
    	return $formatedPrice . "VND";
    }
}

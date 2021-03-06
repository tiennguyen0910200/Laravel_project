<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Cart;

class CartController extends Controller
{
	function indexCart(){
            if(Auth::user())
		{
			$idUser = Auth::user()->id;
			$cartdata = DB::table('carts')
			->where('user_id','=',$idUser)
			->join('users','users.id','=','carts.user_id')
			->join('sons','sons.id', '=', 'carts.product_id')
			->select('carts.id','sons.name', 'sons.newPrice', 'sons.img','carts.quantity')
			->get();
			return view("user.cart",['cartdata' => $cartdata]);
		}  
		else
		{
			return redirect("/auth/login");
		}
	}
	function addCart($id) {

		$idUser = Auth::user()->id;
        $check = DB::table('carts')
		->where('product_id', $id)
		->where('user_id', $idUser)
		->count();

		if ($check == 1) {
			$quantity = DB::table('carts')
			->where('product_id', $id)
			->where('user_id', $idUser)
			->value('quantity') + 1;

			DB::table('carts')
			->where('product_id', $id)
			->where('user_id', $idUser)
			->update(["quantity" => $quantity]);
			return redirect()->route('home', ["carts" =>"Thêm vào giỏ hàng Thành Công"]);
		} else {
			DB::table('carts')->insert(["product_id" => $id, "quantity" => 1, "user_id" => $idUser]);
			return redirect()->route('home', ["carts" => "Thêm vào giỏ hàng Thành Công"]);
		}
	}
	function destroyCart($id){
		$cart = Cart::find($id);
		$cart->delete();
		return redirect('user/cart');
	}

	function increase($id)
    {
        $cart = Cart::find($id);
        $quantity = $cart->quantity + 1;
        $cart->quantity = $quantity;
        $cart->save();
        return redirect('user/cart');
    }
    function crease($id)
    {
        $cart = Cart::find($id);
        $quantity = $cart->quantity - 1;
        $cart->quantity = $quantity;
        $cart->save();
        return redirect('user/cart');
    }

}

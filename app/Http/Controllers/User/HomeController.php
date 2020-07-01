<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
	function index(){
		$son=DB::table("sons")->get();
		return view("user.home",["son"=>$son]);
	}
  function logout(){
   Auth::logout();
   return redirect("auth/index");
}
function detail(){
   return view("user.detail");
}
function getsanpham(Request $req){
   $sanpham = DB::table('sons')->where('id',$req->id)->first();
   return view("user.detail",compact('sanpham'));
        // return redirect("user/detail");
}
function cart(Request $req){
   $sanpham = DB::table('sons')->where('id',$req->id)->first();
   return view("user.cart",compact('sanpham'));
}
function search(Request $request)
{
    $txt = $request->input('txtSearch');
    $search = DB::table('sons')->where('name', 'LIKE', '%' . $txt . '%')->get();
    return view('user.search', ['research' => $search]);
}
function pay(){
    $carts=DB::table('carts')->where("user_id", Auth::user()->id)->get();
    foreach ($carts as $cart) {
     $inforProduct= DB::table('sons')->where("id", $cart->product_id)->first();

     $cart->inforProduct=$inforProduct;
 }
 return view("user.pay",['carts'=> $carts]);
}
function order(Request $request){
    $name= $request->name;
    $phone= $request->phone;
    $address= $request->address;
    $carts=DB::table('carts')->where("user_id", Auth::user()->id)->get();
    foreach ($carts as $cart) {
     $inforProduct= DB::table('sons')->where("id", $cart->product_id)->first();
     $cart->inforProduct=$inforProduct;
     $array[]= array(
       "name" =>$cart->inforProduct->name,
       "img" =>$cart->inforProduct->img,
       "quantity" =>$cart->quantity,
       "price" =>$cart->inforProduct->newPrice
   );
 }
 $detail= json_encode($array);
 $user_id= Auth::user()->id; 
 DB::table('orders')->insert([
    "user_id" =>$user_id,
    "name" => $name,
    "phone" => $phone,
    "address" => $address,
    "detail" =>$detail,
]);
 
 
}
}

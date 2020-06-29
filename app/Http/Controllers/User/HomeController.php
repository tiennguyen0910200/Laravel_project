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
	function search(){
         $search = $request->input('search');
         $son = User::with('services', function($query) use ($category) {
         $query->where('category', 'LIKE', '%' . $category . '%');
    })->get();
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{  
	function form(){
		return view("admin.create");
	}
	function index(){
		$son=DB::table("sons")->get();
		$users = DB::table("users")->get();
		return view("admin.dashboard",["sons"=>$son, "users" => $users]);

	}
	
	function store(Request $request){
		
		
		$filePath =$request->file('img')->store("public");
		$discount= $request->input("discount");
		$name=  $request->input("name");
		$quantity = $request->input("quantity");
		$description= $request->input("description");
		$oldPrice= $request->input("oldPrice");
		$newPrice= $request->input("newPrice");
		DB::table('sons')->insert(
			["img" => $filePath,
			"discount" => $discount, 
			"name" => $name,
			"quantity" => $quantity,
			"description" =>$description, 
			"oldPrice" => $oldPrice,
			"newPrice" => $newPrice]
		);
		return redirect('admin/dashboard');
	}
	function destroy($ida){
		DB::table('sons')->where('id', '=', $ida)->delete();
		DB::table('users')->where('id', '=', $ida)->delete();
        return redirect('admin/dashboard');
	}
	function edit($ida){
		$son = DB::table('sons')->find($ida);
		
		return view("admin.Update",["data" => $son]);
	}
	function update($id, Request $request){
		$name = $request->name;
		$quantity = $request->quantity;
		$oldPrice = $request->oldPrice;
		$newPrice = $request->newPrice;
        $img = $request->file('img')->store("public");
      	// $ing =str_replace("public", "storage", $img);

		DB::table('sons')->where("id",$id)->update(["name"=>$name,"quantity"=>$quantity,"oldPrice"=>$oldPrice,"newPrice"=>$newPrice,"img"=>$img]);
		return redirect('admin/dashboard');

	}
}

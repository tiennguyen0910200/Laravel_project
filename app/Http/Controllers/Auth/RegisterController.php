<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{ function index()
    {
        return view("auth.register");
    }
    function register(Request $request)
    {
        $username = $request->username;
        $password = $request->password;
        $name = $request->name;
        $dob = $request->dob;
        $role = $request->role;
        $hashPassword = Hash::make($password);
        DB::table('users')->insert([
            "username" => $username, 
            "password" => $hashPassword, 
            "name" => $name, 
            "dob" => $dob,
            "role" => $role
        ]);
        return redirect('/auth/login');
    }
}

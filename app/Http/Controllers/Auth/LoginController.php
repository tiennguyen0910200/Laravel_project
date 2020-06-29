<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
     function index()
    {
        return view("auth.login");
    }
    function login(Request $request)
    {
        $username = $request->username;
        $password = $request->password;

        if(Auth::attempt(['username' => $username, 'password' => $password])){        
            $user = Auth::user();
            if ($user->role =="admin") {
                return redirect()->route('admin.dashboard');
            } else {                          
                return redirect()->route('home');
            }
        } else{
            return redirect()->route("auth.login", ["error" => "Invalid username or password"]);
        }
    }
}

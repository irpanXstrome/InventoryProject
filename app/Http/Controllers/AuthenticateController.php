<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthenticateController extends Controller
{
    //views
    public function loginView(){
        return view("final.login",[
            "title" => "Login"
        ]);
    }

    public function registerView(){
        return view("final.register",[
            "title" => "Register"
        ]);
    }

    //end view

    public function loginProcess(Request $request){
        $cresidentials = $request->validate([
           "username" => "required|min:3",
           "password" => "required"
        ]);
        if(Auth::attempt($cresidentials)){
            $request->session()->regenerate();
            return redirect()->intended("/dashboard");
        }
        return back()->with("errorLogin","Login Error");
    }

    public function register(Request $request){
        $validData = $request->validate([
            "nama" => "required|min:3" ,
            "alamat" => "required|min:1",
            "no_telepon" => "required|min:1" ,
            "email" => "required|email:dns|unique:users",
            "username" => "required|unique:users",
            "password" => "required|confirmed|min:3",
        ]);
        $validData["password"] = Hash::make($validData["password"]);
        User::create($validData);

        return redirect('/login');
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}

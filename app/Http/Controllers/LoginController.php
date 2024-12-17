<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request){
        $credentials = $request->validate([
            'email'=>'required|email',
            'password'=>'required',
        ]);

        if(Auth::attempt($credentials)){
            return redirect()->route('dashboard');
        }
    }
    public function dashboard(){
        if(Auth::check()){
            return view('dashboard');
        }else{
            return redirect()->route('login');
        }
    }
}

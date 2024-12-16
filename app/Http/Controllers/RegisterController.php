<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register(Request $Request){
        $data=$Request->validate([
        'name'=>'required',
        'email'=>'required|email',
        'password'=>'required|confirmed',
        ]);
        $user=user::create($data);
        if($user){
            return view('login');
        }
    }
}

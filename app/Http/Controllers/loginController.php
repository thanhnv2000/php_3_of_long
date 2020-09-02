<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class loginController extends Controller
{
   
    public function postLogin(Request $request){
         $email = $request->email;
         $password = $request->password;
        $request->validate([
            'email' => 'required|min:10',
            'password' => 'required'
        ],[
            'email.required' => 'Hãy nhập Email',
            'email.min' => 'Nhập Trên 8 Ký Tự',
            'password.required' => 'Nhập PassWord'
        ]);
        if(Auth::attempt([
            'email' => $email,
            'password' => $password
        ])){
            return redirect()->route('dashboard');
        }

        return redirect()->route('dashboard');
        //  return view('auth.login-data',[
        //      'name' => $username,
        //      'pass' => $password
        //  ]);
    }
}

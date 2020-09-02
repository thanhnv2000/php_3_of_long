<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profile(){
        return view('auth.profile');
    }

    public function getAll(){
        $users = User::paginate(4);
        //dd($users);
        return view('user.list-user', [
            'users' => $users
        ]);
    }
}

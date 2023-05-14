<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthorController extends Controller
{
    public function ligin(Request $user){
        $author = $user->only('email-username' , 'password');
        if(Auth::attempt($author)){
            return redirect()->route('dashboard');
        }else
            return redirect()->route('login');
    }
}

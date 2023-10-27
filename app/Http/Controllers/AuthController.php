<?php

namespace App\Http\Controllers;

use App\Models\Username;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){
        return view("auth.login");
    }

    public function logout(Request $request){
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('login');
    }
}

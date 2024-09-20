<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('landing');
    }

    public function login()
    {
        return view('login');
    }

    public function loginPost(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
          if (Auth::user()->level == 'admin') {
            return redirect('/admin');
          } elseif (Auth::user()->level == 'user') {
            return redirect('/');
          }
        }

        return redirect('login')->with('error', 'Email atau password salah');
    }
}

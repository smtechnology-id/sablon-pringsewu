<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index()
    {
        $products = Product::take(3)->get();
        return view('landing', compact('products'));
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

    // register
    public function register()
    {
        return view('register');
    }

    public function registerPost(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'password_confirmation' => 'required|same:password',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'level' => 'user',
        ]);

        Auth::login($user);
        return redirect()->route('index')->with('success', 'Registrasi berhasil');
    }

    // Logout
    public function logout()
    {
        Auth::logout();
        return redirect()->route('index')->with('success', 'Logout berhasil');
    }

    public function product()
    {
        $products = Product::all();
        return view('product', compact('products'));
    }
    public function productDetail($slug)
    {
        $product = Product::where('slug', $slug)->first();
        return view('product-detail', compact('product'));
    }
    
}

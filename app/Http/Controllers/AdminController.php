<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    // Product
    public function product()
    {
        $products = Product::all();
        return view('admin.product', compact('products'));
    }

    public function productCreate()
    {
        return view('admin.product-create');
    }
    
}

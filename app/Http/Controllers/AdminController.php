<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Str;
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
    public function productStore(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10048',
            'name' => 'required',
            'short_description' => 'required',
            'description' => 'required',
            'price' => 'required',
            'stock' => 'required',
        ]);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            // Simpan gambar ke storage
            $path = $image->storeAs('images', $imageName, 'public');
         
        }
        $product = new Product();
        $product->image = $imageName;
        $product->slug = Str::slug($request->name);
        $product->name = $request->name;
        $product->short_description = $request->short_description;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->save();
        return redirect()->route('admin.product');
    }
    public function productEdit($id)
    {
        $product = Product::find($id);
        return view('admin.product-edit', compact('product'));
    }
    public function productUpdate(Request $request)
    {
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10048',
            'name' => 'required',
            'short_description' => 'required',
            'description' => 'required',
            'price' => 'required',
            'stock' => 'required',
            'id' => 'required',
        ]);
        $product = Product::find($request->id);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            // Simpan gambar ke storage
            $path = $image->storeAs('images', $imageName, 'public');
            $product->image = $imageName;
        }
        $product->name = $request->name;
        $product->short_description = $request->short_description;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->save();
        return redirect()->route('admin.product');
    }
    public function productDelete($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('admin.product');
    }
}

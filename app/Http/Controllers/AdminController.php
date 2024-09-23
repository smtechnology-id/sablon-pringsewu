<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Support\Str;
use App\Models\ProductOrder;
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

    // Order
    public function order()
    {
        $orders = Order::all();
        $pending = Order::where('status', 'pending')->get();
        $confirmed = Order::where('status', 'confirmed')->get();
        $rejected = Order::where('status', 'rejected')->get();
        $processing = Order::where('status', 'processing')->get();
        $shipped = Order::where('status', 'shipped')->get();
        $delivered = Order::where('status', 'delivered')->get();
        return view('admin.order', compact('orders', 'pending', 'confirmed', 'rejected', 'processing', 'shipped', 'delivered'));
    }

    public function orderDetail($code_order)
    {
        $order = Order::where('code_order', $code_order)->first();
        $productOrder = ProductOrder::where('code_order', $code_order)->get();
        $totalPrice = $productOrder->sum('total_price');
        return view('admin.order-detail', compact('order', 'productOrder', 'totalPrice'));
    }

    public function orderUpdate(Request $request)
    {
        $request->validate([
            'code_order' => 'required',
            'status' => 'required',
            'notes' => 'nullable',
        ]);

        $order = Order::where('code_order', $request->code_order)->first();
        $order->status = $request->status;
        $order->notes_from_admin = $request->notes;
        $order->save(); 
        return redirect()->route('admin.order.detail', $request->code_order)->with('success', 'Status pesanan berhasil diupdate');
    }
}

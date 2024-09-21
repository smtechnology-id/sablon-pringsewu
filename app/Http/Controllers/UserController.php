<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use Illuminate\Support\Str;
use App\Models\ProductOrder;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function cart()
    {
        $cart = Cart::where('user_id', auth()->user()->id)->get();
        $cart2 = Cart::where('user_id', auth()->user()->id)->get();
        $subtotal = 0;
        foreach ($cart2 as $cart2) {
            $subtotal += $cart2->quantity * $cart2->product->price;
        }
        $code_order = Str::random(15);
        return view('cart', compact('cart', 'subtotal', 'code_order'));
    }
    public function cartAdd(Request $request)
    {
        $request->validate([
            'quantity' => 'required|integer|min:1',
            'size' => 'required|string',
            'notes' => 'nullable|string',
            'product_id' => 'required|exists:products,id',
            'design' => 'nullable|max:2048',
        ]);

        // Cek Apakah Product Sudah Ada Di Cart
        $cart = Cart::where('user_id', auth()->user()->id)
                    ->where('product_id', $request->product_id)
                    ->where('size', $request->size)
                    ->first();
        if ($cart) {
            return redirect()->route('cart')->with('error', 'Product already in cart');
        }

        if ($request->hasFile('design')) {
            // Pastikan untuk menjalankan perintah artisan storage:link
            $design = $request->file('design')->store('designs', 'public');
            $desainName = $request->file('design')->getClientOriginalName();
        } else {
            $design = null;
            $desainName = null;
        }
        $cart = new Cart();
        $cart->user_id = auth()->user()->id;
        $cart->product_id = $request->product_id;
        $cart->quantity = $request->quantity;
        $cart->size = $request->size;
        $cart->notes = $request->notes;
        $cart->design = $desainName;
        $cart->save();
        return redirect()->route('cart')->with('success', 'Product added to cart');
    }

    public function cartRemove($id)
    {
        $cart = Cart::find($id);
        $cart->delete();
        return redirect()->route('cart')->with('success', 'Product removed from cart');
    }

    public function prosesCo(Request $request)
    {
        dd($request->all());
        $request->validate([
            'address' => 'required|string',
            'payment_proof' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'code_order' => 'required|string',
        ]);

        // Masukkan Data dari cart ke Order
        $cart = Cart::where('user_id', auth()->user()->id)->get();
        foreach ($cart as $cart) {
            $order = new ProductOrder();
            $order->user_id = auth()->user()->id;
            $order->code_order = $request->code_order;
            $order->product_id = $cart->product_id;
            $order->quantity = $cart->quantity;
            $order->size = $cart->size;
            $order->notes = $cart->notes;
            $order->total_price = $cart->product->price * $cart->quantity;
            $order->save();
        }

        // Hapus Data dari Cart
        Cart::where('user_id', auth()->user()->id)->delete();

        // Masukkan Data ke Order
        $order = new Order();
        $order->user_id = auth()->user()->id;
        $order->code_order = $request->code_order;
        $order->address = $request->address;
        $order->payment_proof = $request->payment_proof;
        $order->status = 'pending';
        $order->save();
        
        // Redirect ke halaman success
        return redirect()->route('cart')->with('success', 'Checkout Success');
    }

    public function checkoutPage($code_order)
    {
        $order = Order::where('code_order', $code_order)->get();
        $productOrder = ProductOrder::where('code_order', $code_order)->get();
        return view('checkout-page', compact('order', 'productOrder'));
    }
}

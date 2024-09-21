@extends('layouts.landing')
@section('cart', 'active')
@section('content')
    <!-- Inner Banner -->
    <div class="inner-banner inner-bg6">
        <div class="container">
            <div class="inner-title">
                <h3>Cart</h3>
                <ul>
                    <li>
                        <a href="{{ route('index') }}">Home</a>
                    </li>
                    <li>
                        <i class='bx bxs-chevrons-right'></i>
                    </li>
                    <li>Cart</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Inner Banner End -->

    <!-- Start Cart Area -->
    <section class="cart-wraps-area ptb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12">
                    <form>
                        <div class="cart-wraps">
                            <div class="cart-table table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">Product</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Unit Price</th>
                                            <th scope="col">Size</th>
                                            <th scope="col">Quantity</th>
                                            <th scope="col">Total</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($cart as $cart)
                                            <tr>
                                                <td class="product-thumbnail">
                                                    <a href="#">
                                                        <img src="{{ asset('storage/images/' . $cart->product->image) }}"
                                                            alt="{{ $cart->product->name }}"
                                                            style="width: 100px; height: 100px;">
                                                    </a>
                                                </td>

                                                <td class="product-name">
                                                    <a href="#">{{ $cart->product->name }}</a>
                                                </td>

                                                <td class="product-price">
                                                    <span class="unit-amount">Rp.
                                                        {{ number_format($cart->product->price, 0, ',', '.') }}</span>
                                                </td>

                                                <td class="product-quantity">
                                                    <span>{{ $cart->quantity }}</span>
                                                </td>

                                                <td class="product-subtotal">
                                                    <span class="subtotal-amount">Rp.
                                                        {{ number_format($cart->quantity * $cart->product->price, 0, ',', '.') }}</span>

                                                    <a href="{{ route('cart.remove', $cart->id) }}" class="remove">
                                                        <i class='bx bx-trash'></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <div class="cart-buttons">
                                <div class="row align-items-center  justify-content-center">
                                    <div class="col-lg-7 col-sm-7 col-md-7">
                                        <div class="continue-shopping-box">
                                            <a href="{{ route('product') }}" class="default-btn">
                                                Continue Shopping
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                                <div class="cart-totals">
                                    <h3>Payment Information</h3>
                                    <table class="table table-borderless">
                                        <thead>
                                            <tr>
                                                <th>Nama</th>
                                                <th>Bank</th>
                                                <th>No. Rekening</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Atas Nama</td>
                                                <td>BCA</td>
                                                <td>1234567890</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="cart-totals">
                                    <h3>Cart Totals</h3>
                                    <ul>
                                        <li>Jumlah Produk <span>{{ $cart->count() }}</span></li>
                                        <li>Total <span>Rp. {{ number_format($subtotal, 0, ',', '.') }}</span></li>
                                    </ul>
                                    <a href="{{ route('checkout.page', $code_order) }}" class="default-btn">
                                        Checkout
                                    </a>

                                    <div class="cart-calc">
                                        <h3>Checkout</h3>
                                        <form action="{{ route('checkout') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label for="address">Alamat Pengiriman</label>
                                                <textarea name="address" id="address" cols="30" rows="2" class="form-control"
                                                    placeholder="Alamat Pengiriman" required></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="payment_proof">Bukti Pembayaran</label>
                                                <input type="file" name="payment_proof" id="payment_proof"
                                                    class="form-control" required accept="image/*">
                                            </div>
                                            <input type="hidden" name="code_order" value="{{ $code_order }}">
                                            <button type="submit" class="default-btn" style="border: none">
                                                Proceed To Checkout
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                </form>
            </div>
        </div>
        </div>
    </section>
    <!-- End Cart Area -->

@endsection

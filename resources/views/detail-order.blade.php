@extends('layouts.landing')
@section('cart', 'active')
@section('content')
    <!-- Inner Banner -->
    <div class="inner-banner inner-bg6">
        <div class="container">
            <div class="inner-title">
                <h3>Detail Order</h3>
                <ul>
                    <li>
                        <a href="{{ route('index') }}">Home</a>
                    </li>
                    <li>
                        <i class='bx bxs-chevrons-right'></i>
                    </li>
                    <li>Detail Order</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Inner Banner End -->

    <!-- Start Detail Order Area -->
    <section class="cart-wraps-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="cart-totals">
                        <h3>Order Detail</h3>
                        <ul>
                            <li>Order Code <span>{{ $order->code_order }}</span></li>
                            <li>Alamat pengiriman <span>{{ $order->address }}</span></li>
                            <li>Tanggal Order <span>{{ $order->created_at->format('d F Y H:i') }}</span></li>
                            <li>Jumlah Jenis Produk <span>{{ $productOrder->count() }} Jenis</span></li>
                            <li>Total Quantity Produk <span>{{ $productOrder->sum('quantity') }} Pcs</span></li>
                            <li>Total Pembayaran <span>Rp.
                                    {{ number_format($productOrder->sum('total_price'), 0, ',', '.') }}</span></li>
                            <li>Status <span>{{ $order->status }}</span></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="cart-totals">
                        <h3>Status Pesanan</h3>
                        <ul>
                            <li>Status <span>{{ $order->status }}</span></li>
                            <li>Tanggal Pembayaran <span>{{ $order->created_at->format('d F Y H:i') }}</span></li>
                            <li>Note Dari Admin
                                <span><i>{{ $order->notes_from_admin ?? 'Tidak Ada Catatan Dari Admin' }}</i></span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-5">
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
                                            <th scope="col">Custom Design</th>
                                            <th scope="col">Total</th>
                                            <th scope="col">Catatan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($productOrder as $product)
                                            <tr>
                                                <td class="product-thumbnail">
                                                    <a target="_blank" href="{{ route('product.detail', $product->product->slug) }}">
                                                        <img src="{{ asset('storage/images/' . $product->product->image) }}"
                                                            alt="{{ $product->product->name }}"
                                                            style="width: 100px; height: 100px;">
                                                    </a>
                                                </td>
                                                <td class="product-name">
                                                    <a target="_blank" href="{{ route('product.detail', $product->product->slug) }}">{{ $product->product->name }}</a>
                                                </td>
                                                <td class="product-price">
                                                    <span class="unit-amount">Rp.
                                                        {{ number_format($product->product->price, 0, ',', '.') }}</span>
                                                </td>
                                                <td class="product-size">
                                                    <span>{{ $product->size }}</span>
                                                </td>
                                                <td class="product-quantity">
                                                    <span>{{ $product->quantity }}</span>
                                                </td>
                                                <td class="product-custom-design">
                                                    <span>
                                                        @if ($product->design)
                                                            <a href="{{ asset('storage/' . $product->design) }}"
                                                                target="_blank">Lihat Desain</a>
                                                        @else
                                                            <span>No Custom Design</span>
                                                        @endif
                                                    </span>
                                                </td>
                                                <td class="product-total">
                                                    <span class="total-amount">Rp.
                                                        {{ number_format($product->quantity * $product->product->price, 0, ',', '.') }}</span>
                                                </td>
                                                <td class="product-catatan">
                                                    <span>{{ $product->notes }}</span>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                </table>
                            </div>


                        </div>


                </div>
                </form>
            </div>
        </div>
        </div>
    </section>
    <!-- End Detail Order Area -->

@endsection

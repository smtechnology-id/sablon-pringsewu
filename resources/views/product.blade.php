@extends('layouts.landing')
@section('product', 'active')
@section('content')
    <!-- Inner Banner -->
    <div class="inner-banner inner-bg7">
        <div class="container">
            <div class="inner-title">
                <h3>Product</h3>
                <ul>
                    <li>
                        <a href="{{ route('index') }}">Home</a>
                    </li>
                    <li>
                        <i class='bx bxs-chevrons-right'></i>
                    </li>
                    <li>Product</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Inner Banner End -->

    <!-- Product Area -->
    <section class="product-area pt-100 pb-70">
        <div class="container">
            <div class="section-title text-center">
                <span>Product</span>
                <h2>We Have Some Pre-ready Product</h2>
                <p>
                    What indication best sick be project proposal in attempt, train of the showed
                    some a forth. That homeless, won't many of goals thoughts volumes felt.
                </p>
            </div>
            <div class="row pt-45 justify-content-center">
                @foreach ($products as $product)
                    <div class="col-lg-4 col-md-6">
                        <div class="product-card">
                            <a href="{{ route('product.detail', $product->slug) }}">
                                <img src="{{ asset('storage/images/' . $product->image) }}" alt="Products Images">
                            </a>
                            <div class="product-content">
                                <a href="{{ route('product.detail', $product->slug) }}">
                                    <h3>{{ $product->name }}</h3>
                                </a>
                                <p><span>Rp. {{ number_format($product->price, 0, ',', '.') }}</span></p>
                                <div class="product-cart">
                                    <ul>
                                        <li>
                                            <a href="{{ route('product.detail', $product->slug) }}">
                                                <i class='bx bx-zoom-in'></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- Product Area End -->
@endsection

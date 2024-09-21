@extends('layouts.landing')
@section('product', 'active')
@section('content')
    <!-- Inner Banner -->
    <div class="inner-banner inner-bg2">
        <div class="container">
            <div class="inner-title">
                <h3>{{ $product->name }}</h3>
                <ul>
                    <li>
                        <a href="{{ route('index') }}">Home</a>
                    </li>
                    <li>
                        <i class='bx bxs-chevrons-right'></i>
                    </li>
                    <li>Product Details </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Inner Banner End -->

    <!-- Product Detls -->
    <section class="product-detls ptb-100">
        <div class="container">
            <div class="row align-items-center  justify-content-center">
                <div class="col-lg-6 col-md-12">
                    <div class="product-detls-image">
                        <img src="{{ asset('storage/images/' . $product->image) }}" alt="Image">
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="product-desc">
                        <h3>{{ $product->name }}</h3>
                        <div class="price">
                            <span class="new-price">Rp. {{ number_format($product->price, 0, ',', '.') }}</span>
                        </div>

                        <p>
                            {{ $product->short_description }}

                        </p>

                        <form action="{{ route('cart.add') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="input-count-area">
                                <h3>Quantity</h3>
                                <div class="input-counter">
                                    <span class="minus-btn"><i class='bx bx-minus'></i></span>
                                    <input type="text" min="1" value="1" name="quantity" required>
                                    <span class="plus-btn"><i class='bx bx-plus'></i></span>
                                </div>

                            </div>
                            <div class="size d-flex align-items-center " style="margin-top: 10px;">
                                <h3 style="margin-right: 10px; font-weight: light; font-size: 16px;">Size</h3>
                                <select name="size" id="form-control" style="min-width: 300px; margin-left: 10px;" required>
                                    <option value="small">Small</option>
                                    <option value="medium">Medium</option>
                                    <option value="large">Large</option>
                                </select>
                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                            </div>
                            <div class="design size d-flex align-items-center" style="margin-top: 10px;">
                                <h3 style="margin-right: 10px; font-weight: light; font-size: 16px;">Custom Desain</h3>
                                <input type="file" name="design" id="design" class="form-control" style="margin-left: 10px;">
                            </div>
                            <div class="notes">
                                <h3 style="margin-right: 10px; font-weight: light; font-size: 16px;">Catatan</h3>
                                <textarea name="notes" id="notes" cols="30" rows="2" class="form-control"></textarea>
                            </div>
                            <div class="product-add">
                                <button type="submit" class="default-btn">
                                    <i class="fas fa-cart-plus"></i> Add To Cart
                                </button>
                            </div>
                        </form>


                    </div>
                </div>

                <div class="col-lg-12 col-md-12">
                    <div class="tab product-detls-tab">
                        <div class="row justify-content-center">
                            <div class="col-lg-12 col-md-12">
                                <ul class="tabs">
                                    <li>
                                        <a href="blog-details.html"> Description</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="tab_content current active">
                                    <div class="tabs_item current">
                                        <div class="product-detls-tab-content">
                                            <h3>{{ $product->name }}</h3>
                                            <p>{{ $product->short_description }}</p>
                                            <hr>
                                            <p>
                                                {!! $product->description !!}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Detls End -->

@endsection

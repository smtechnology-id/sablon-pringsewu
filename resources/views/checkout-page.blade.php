@extends('layouts.landing')

@section('content')
    <!-- Inner Banner -->
    <div class="inner-banner inner-bg5">
        <div class="container">
            <div class="inner-title">
                <h3>Checkout</h3>
                <ul>
                    <li>
                        <a href="{{ route('index') }}">Home</a>
                    </li>
                    <li>
                        <i class='bx bxs-chevrons-right'></i>
                    </li>
                    <li>Checkout</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Inner Banner End -->

    <!-- Checkout Area -->
    <section class="checkout-area pt-100 pb-70">
        <div class="container">

            <form action="{{ route('checkout') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="billing-details">
                            <h3 class="title">Billing Details</h3>

                            <div class="row justify-content-center">

                                <div class="col-lg-12 col-md-12">
                                    <div class="form">
                                        <form action="{{ route('checkout') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <textarea name="address" id="address" cols="30" rows="5" placeholder="Alamat Pengiriman"
                                                    class="form-message" required></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="payment_proof">Bukti Pembayaran</label>
                                                <input type="file" name="payment_proof" id="payment_proof" placeholder="Bukti Pembayaran"
                                                    class="form-control" required accept="image/*">
                                            </div>
                                            <input type="hidden" name="code_order" value="{{ $code_order }}">
                                            <button type="submit" class="default-btn three">
                                                Place to Order
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="order-details">
                            <div class="order-table table-responsive">
                                <h3>Rekening Pembayaran</h3>
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

                            <div class="payment-box">
                                <div class="payment-method">
                                    <p>
                                        <input type="radio" id="direct-bank-transfer" name="radio-group" checked>
                                        <label for="direct-bank-transfer">Tata Cara Pembayaran</label>
											Make your payment directly into our bank account. Please use your Order
											ID as the payment reference. Your order will not be shipped until the funds have
											cleared in our account.
                                    </p>
                                    
                                </div>

                                
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- Checkout Area End -->
@endsection

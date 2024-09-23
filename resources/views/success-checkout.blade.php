@extends('layouts.landing')

@section('content')
     <!-- Start Coming Soon Area -->
     <div class="coming-soon-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="coming-soon-content">
                        <h1>Success Checkout</h1>
                        <p>Your order has been successfully placed. Please wait for the confirmation from the seller.</p>

                    
                        <form class="newsletter-form" data-toggle="validator">
                            <a href="{{ route('index') }}" class="default-btn">Back to Home</a>
                            <div id="validator-newsletter" class="form-result"></div>
                        </form> 

                        <ul class="header-content-right">
                            <li>
                                <a href="#">
                                    <i class="bx bxl-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="bx bxl-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="bx bxl-pinterest-alt"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="bx bxl-instagram"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Coming Soon Area -->
    

@endsection

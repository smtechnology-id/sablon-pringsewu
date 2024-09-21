@extends('layouts.landing')

@section('content')
    <!-- Inner Banner -->
    <div class="inner-banner inner-bg2">
        <div class="container">
            <div class="inner-title">
                <h3>Register</h3>
                <ul>
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <i class='bx bxs-chevrons-right'></i>
                    </li>
                    <li>Register</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Inner Banner End -->

    <!-- Start Sing In Area -->
    <section class="sing-in-area ptb-100">
        <div class="container">
            <div class="contact-wrap-form sing-in-width">
                <div class="section-title text-center">
                    <span>Register</span>
                    <h2>Register to your account!</h2>

                </div>
                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form method="post" action="{{ route('registerPost') }}">
                    @csrf
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="form-group">
                                <input class="form-control" type="text" name="name" placeholder="Name">
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <input class="form-control" type="email" name="email" placeholder="Email">
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <input class="form-control" type="password" name="password" placeholder="Password">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <input class="form-control" type="password" name="password_confirmation"
                                    placeholder="Password Confirmation">
                            </div>
                        </div>
                        <div class="col-12 text-center">
                            <button class="default-btn btn-two sing-btn" type="submit">
                                Register
                            </button>
                        </div>

                        <div class="col-12">
                            <p class="account-desc">
                                Already have an account?
                                <a href="{{ route('login') }}">Login</a>
                            </p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- End Sing In Area -->

@endsection

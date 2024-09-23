@extends('layouts.landing')

@section('content')
    <!-- Inner Banner -->

    <!-- Inner Banner End -->

    <!-- Start Sing In Area -->
    <section class="sing-in-area ptb-100">
        <div class="container">
            <div class="contact-wrap-form sing-in-width">
                <div class="section-title text-center">
                    <span>Sign In</span>
                    <h2>Sing In to your account!</h2>

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
                <form method="post" action="{{ route('loginPost') }}">
                    @csrf
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="form-group">
                                <input class="form-control" type="text" name="email" placeholder="Username or Email">
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <input class="form-control" type="password" name="password" placeholder="Password">
                            </div>
                        </div>
                        <div class="col-12 text-center">
                            <button class="default-btn btn-two sing-btn" type="submit">
                                Login
                            </button>
                        </div>

                        <div class="col-12">
                            <p class="account-desc">
                                Not a member?
                                <a href="{{ route('register') }}">Sign Up</a>
                            </p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- End Sing In Area -->

@endsection

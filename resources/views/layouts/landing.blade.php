<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <!-- Animate Min CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <!-- Boxicons CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/boxicons.min.css') }}">
    <!-- Meanmenu CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css') }}">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.min.css') }}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <!-- Theme Dark CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/theme-dark.css') }}">

    <!-- Title -->
    <title>Website Gudang Sablon Pringsewu</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="pre-img">
                    <img src="{{ asset('assets/img/footer-logo.png') }}" alt="Logo">
                </div>
                <div class="spinner">
                    <div class="circle1"></div>
                    <div class="circle2"></div>
                    <div class="circle3"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Preloader -->

    <!-- Start Navbar Area -->
    <div class="navbar-area">
        <!-- Menu For Mobile Device -->
        <div class="mobile-nav">
            <a href="{{ route('index') }}" class="logo">
                <img src="{{ asset('assets/img/footer-logo.png') }}" alt="Logo">
            </a>
        </div>

        <!-- Menu For Desktop Device -->
        <div class="main-nav">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light ">
                    <a class="navbar-brand" href="{{ route('index') }}">
                        <img src="{{ asset('assets/img/logo.png') }}" class="logo-one" alt="Logo">
                        <img src="{{ asset('assets/img/footer-logo.png') }}" class="logo-two" alt="Logo">
                    </a>

                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav m-auto">
                            <li class="nav-item">
                                <a href="{{ route('index') }}" class="nav-link @yield('home')">
                                    Home
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="about.html" class="nav-link @yield('about')">
                                    About
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/product" class="nav-link @yield('product')">
                                    Product
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="contact.html" class="nav-link @yield('contact')">
                                    Contact
                                </a>
                            </li>
                        </ul>



                        @if (Auth::check())
                            <div class="cart-area">
                                <a href="{{ route('cart') }}">
                                    <i class='bx bx-cart'></i>
                                    <span>{{ $cartCount }}</span>
                                </a>
                            </div>
                            <div class="cart-area">
                                <a href="{{ route('order') }}">
                                    <i class='bx bx-package'></i> <!-- Ganti ikon pengguna dengan ikon paket -->
                                    <span>{{ $orderCount }}</span>
                                </a>
                            </div>
                            <div class="menu-btn">
                                <a href="{{ route('logout') }}" class="phone-btn">
                                    Logout
                                </a>
                            </div>
                        @else
                            <div class="menu-btn">
                                <a href="{{ route('login') }}" class="phone-btn">
                                    Login
                                </a>
                            </div>
                        @endif
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- End Navbar Area -->
    @if (session('success'))
        <div class="alert alert-custom" role="alert">
            <div class="custom-alert-icon icon-primary"><i class="material-icons-outlined">done</i></div>
            <div class="alert-content">
                <span class="alert-title">{{ session('success') }}</span>
            </div>
        </div>
    @endif
    @if (session('error'))
        <div class="alert alert-custom" role="alert">
            <div class="custom-alert-icon icon-warning"><i class="material-icons-outlined">error</i></div>
            <div class="alert-content">
                <span class="alert-title">{{ session('error') }}</span>
            </div>
        </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-custom" role="alert">
            <div class="custom-alert-icon icon-warning"><i class="material-icons-outlined">error</i></div>
            <div class="alert-content">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </div>
        </div>
    @endif
    @yield('content')
    <!-- Footer Area -->
    <footer class="footer-area">
        <div class="container">

            <div class="footer-contact">

                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-4">

                        <div class="footer-card">

                            <i class='bx bx-time'></i>

                            <h3>Sen - Kam : 10:00 - 18:00</h3> <!-- Diubah ke bahasa Indonesia -->

                        </div>

                    </div>


                    <div class="col-lg-4 col-md-4">

                        <div class="footer-card">

                            <i class='bx bxs-map'></i>

                            <h3>28/A Jalan, Pringsewu, Indonesia</h3> <!-- Diubah alamat -->

                        </div>
                    </div>


                    <div class="col-lg-4 col-md-4">
                        <div class="footer-card">
                            <i class='bx bxs-phone-call'></i>

                            <h3 class="media-tel">

                                <a href="tel:+628123456789">+62 812 3456 789</a> <!-- Diubah nomor telepon -->

                            </h3>

                        </div>

                    </div>
                </div>

            </div>


            <div class="footer-top-list pb-70">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="footer-list">
                            <h3>Tautan Cepat</h3> <!-- Diubah ke bahasa Indonesia -->
                            <ul>

                                <li>

                                    <i class='bx bxs-chevron-right'></i>

                                    <a href="{{ route('index') }}">Beranda</a> <!-- Diubah ke bahasa Indonesia -->
                                </li>

                                <li>

                                    <i class='bx bxs-chevron-right'></i>

                                    <a href="{{ route('product') }}">Layanan</a> <!-- Diubah ke bahasa Indonesia -->
                                </li>
                                <li>

                                    <i class='bx bxs-chevron-right'></i>
                                    <a href="{{ route('about') }}">Tentang Kami</a> <!-- Diubah ke bahasa Indonesia -->
                                </li>
                                <li>
                                    <i class='bx bxs-chevron-right'></i>
                                    <a href="{{ route('contact') }}">Kontak</a> <!-- Diubah ke bahasa Indonesia -->

                                </li>
                            </ul>
                        </div>

                    </div>

                    <div class="col-lg-6 col-md-6">

                        <div class="footer-side-list">

                            <h3>Hubungi Kami</h3> <!-- Diubah ke bahasa Indonesia -->

                            <ul>

                                <li>
                                    <i class='bx bxs-phone'></i>

                                    <a href="tel:+628123456789">+62 812 3456 789</a> <!-- Diubah nomor telepon -->
                                </li>
                                <li>
                                    <i class='bx bxs-phone'></i>
                                    <a href="tel:+628987654321">+62 898 7654 321</a> <!-- Diubah nomor telepon -->
                                </li>
                                <li>
                                    <i class='bx bxl-telegram'></i>
                                    <a href="mailto:email@contoh.com">email@contoh.com</a> <!-- Diubah email -->
                                </li>
                                <li>
                                    <i class='bx bxl-telegram'></i>
                                    <a href="mailto:hello@contoh.com">hello@contoh.com</a> <!-- Diubah email -->
                                </li>
                                <li>
                                    <i class='bx bxs-map'></i>
                                    28/A Jalan, Pringsewu, Indonesia <!-- Diubah alamat -->
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="footer-bottom">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-3">
                        <div class="footer-logo">

                            <img src="{{ asset('assets/img/footer-logo.png') }}" alt="Logo Footer">

                        </div>

                    </div>

                    <div class="col-lg-8 col-md-9">
                        <div class="bottom-text">
                            <p>© Pixis Dimiliki oleh <a href="https://hibootstrap.com/"
                                    target="_blank">HiBootstrap</a></p> <!-- Diubah ke bahasa Indonesia -->


                            <ul class="social-bottom">

                                <li>

                                    <a href="https://www.facebook.com/login/"><i class='bx bxl-facebook'></i></a>

                                </li>

                                <li>

                                    <a href="https://twitter.com/i/flow/login"><i class='bx bxl-twitter'></i></a>

                                </li>
                                <li>
                                    <a href="https://www.instagram.com/accounts/login/"><i
                                            class='bx bxl-instagram'></i></a>

                                </li>

                            </ul>
                        </div>

                    </div>
                </div>

            </div>

        </div>

    </footer>
    <!-- Footer Area End -->


    <!-- Jquery Min JS -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <!-- Bootstrap Bundle Min JS -->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Owl Carousel JS -->
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <!-- Meanmenu JS -->
    <script src="{{ asset('assets/js/meanmenu.js') }}"></script>
    <!-- Wow JS -->
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <!-- Nice Select JS -->
    <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
    <!-- Ajaxchimp Min JS -->
    <script src="{{ asset('assets/js/jquery.ajaxchimp.min.js') }}"></script>
    <!-- Form Validator Min JS -->
    <script src="{{ asset('assets/js/form-validator.min.js') }}"></script>
    <!-- Contact Form JS -->
    <script src="{{ asset('assets/js/contact-form-script.js') }}"></script>
    <!-- Custom JS -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>

</body>

</html>

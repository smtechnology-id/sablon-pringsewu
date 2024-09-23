@extends('layouts.landing')
@section('home', 'active')
@section('content')
            
        <!-- Main Banner -->
        <div class="main-banner">
            <div class="container-fluid">
                <div class="row align-items-center  justify-content-center">
                    <div class="col-lg-6">
                        <div class="banner-content">
                            <h1>Gudang Sablon Pringsewu</h1>    
                            <p>
                                Bikin Kaos Sablon Satuan sampai Ribuan
                                Cepat, Berkualitas, dan Murah?
                            </p>

                            <div class="banner-btn">
                               
                                <a href="{{ route('product') }}" class="default-btn">Our Products</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 pe-0">
                        <div class="banner-img">
                            <img src="{{ asset('assets/img/home1/1.jpg') }}" alt="Banner Images">
                            <div class="banner-into-slider owl-carousel owl-theme">
                                <div class="banner-item">
                                    <img src="{{ asset('assets/img/home1/s-1.png') }}" alt="Banner Images">
                                </div>
                                <div class="banner-item">
                                    <img src="{{ asset('assets/img/home1/s-2.png') }}" alt="Banner Images">
                                </div>
                                <div class="banner-item">
                                    <img src="{{ asset('assets/img/home1/s-3.png') }}" alt="Banner Images">
                                </div>
                                <div class="banner-item">
                                    <img src="{{ asset('assets/img/home1/s-1.png') }}" alt="Banner Images">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Banner End -->
        
        <!-- About Area -->
        <div class="about-area pb-70">
            <div class="container-fluid">
                <div class="row align-items-center  justify-content-center">
                    <div class="col-lg-5 col-xxl-6">
                        <div class="about-img">
                            <img src="{{ asset('assets/img/about/1.png') }}" alt="About Images">
                            <div class="about-bg-shape">
                                <img src="{{ asset('assets/img/about/bg-shape.png') }}" alt="About Shape">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7 col-xxl-6">
                        <div class="about-content">
                            <span>Tentang Kami</span>
                            <h2>Kami Memimpin Gudang Sablon Kami Selama 15 Tahun</h2>
                            <p>
                                Kami adalah penyedia layanan sablon terkemuka yang telah berpengalaman selama lebih dari 15 tahun. 
                                Kami berkomitmen untuk memberikan kualitas terbaik kepada pelanggan kami.
                            </p>
                            <p>
                                Dengan berbagai pilihan produk dan layanan, kami siap memenuhi kebutuhan sablon Anda, 
                                baik untuk skala kecil maupun besar. Hubungi kami untuk informasi lebih lanjut.
                            </p>
                            <div class="about-btn">
                                <a href="{{ route('product') }}" class="know-more-btn">Beli Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="about-shape">
                <img src="{{ asset('assets/img/about/shape1.png') }}" alt="About Shape">
            </div>
        </div>
        <!-- About Area End -->
        
        <!-- Service Area -->
        <section class="service-area pb-70">
            <div class="container">
                <div class="section-title text-center">
                    <span>Services</span>
                    <h2>Pixis Provide Good Quality Printing Services</h2>
                    <p>
                        What indication best sick be project proposal in attempt, train of the showed
                        some a forth. That homeless, won't many of goals thoughts volumes felt.
                    </p>
                </div>
                <div class="service-slider owl-carousel owl-theme pt-45">
                    @foreach ($products as $item)
                    <div class="service-card">
                        <a href="{{ route('product.detail', $item->slug) }}">
                            <img src="{{ asset('storage/images/'.$item->image) }}" alt="Service Images">
                        </a>
                        <div class="service-content">
                            <a href="{{ route('product.detail', $item->slug) }}"><h3>{{ $item->name }}</h3></a>
                            <p>{{ $item->short_description }}</p>
                            <a href="{{ route('product.detail', $item->slug) }}" class="more-btn">
                                <i class='bx bx-plus'></i>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- Service Area End -->
  
        <!-- Testimonial Area -->
        <div class="testimonial-area pb-100">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="testimonial-content">
                            <div class="section-title text-center">
                                <span>Testimonial</span>
                                <h2>People Says About Us</h2>
                                <p>
                                    What indication best sick be project proposal in attempt, train of the showed
                                    some a forth. That homeless, won't many of goals thoughts volumes felt.
                                </p>
                            </div>
                            <div class="testimonial-slider owl-carousel owl-theme pt-45">
                                <div class="testimonial-item">
                                    <h3>John Smith</h3>
                                    <p>
                                        What indication best sick be project proposal in attempt, train of the showed 
                                       some a forth. That homeless, won't many of goals thoughts volumes felt with of as he this.
                                    </p>
                                </div>

                                <div class="testimonial-item">
                                    <h3>John Doe</h3>
                                    <p>
                                        What indication best sick be project proposal in attempt, train of the showed 
                                       some a forth. That homeless, won't many of goals thoughts volumes felt with of as he this.
                                    </p>
                                </div>

                                <div class="testimonial-item">
                                    <h3>Evanaa</h3>
                                    <p>
                                        What indication best sick be project proposal in attempt, train of the showed 
                                       some a forth. That homeless, won't many of goals thoughts volumes felt with of as he this.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5">
                        <div class="testimonial-img">
                            <div class="testimonial-bg-shape">
                                <img src="{{ asset('assets/img/testimonial/bg-shape.png') }}" alt="Testimonial Images">
                            </div>
                            <div class="testimonial-man">
                                <img src="{{ asset('assets/img/testimonial/1.png') }}" alt="Testimonial Shape">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial Area End -->
        
    
        
@endsection
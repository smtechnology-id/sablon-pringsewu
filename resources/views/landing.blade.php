@extends('layouts.landing')
@section('home', 'active')
@section('content')
            
        <!-- Main Banner -->
        <div class="main-banner">
            <div class="container-fluid">
                <div class="row align-items-center  justify-content-center">
                    <div class="col-lg-6">
                        <div class="banner-content">
                            <h1>We Are Digital Print Media Agency</h1>    
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiu
                                smod tempor incididunt ut labore et dolore magna aliqua. Quis
                                ipsum suspendisse ultrices gravida.
                            </p>

                            <div class="banner-btn">
                                <a href="about.html" class="default-btn">Know More</a>
                                <a href="product.html" class="default-btn active">Our Products</a>
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
                            <span>About Us</span>
                            <h2>We Are Leading Our Agency for 15 Years</h2>
                            <p>
                                What indication best sick be project proposal in attempt, train of 
                                the showed some a forth. That homeless, won't many of goals thoughts 
                                volumes felt with of as he this its tend broad. Well, were make come 
                                when from would area page.
                            </p>
                            <p>
                                What indication best sick be project proposal in attempt, train of the
                                showed some a forth. That homeless, won't many of goals thoughts volumes 
                                felt with of as he this its tend broad. Well, were make come when from would 
                                area page puzzles hell in is through on the in more rent mountains.
                            </p>
                            <div class="about-btn">
                                <a href="about.html" class="know-more-btn">Know More</a>
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
                    <div class="service-card">
                        <a href="services.html">
                            <img src="{{ asset('assets/img/service/1.jpg') }}" alt="Service Images">
                        </a>
                        <div class="service-content">
                            <a href="services.html"><h3>Brand Identy</h3></a>
                            <p>Lorem ipsum dolor sit amet, consect is etur adipiscing elit, sed do eiusmo gd  tempor incididunt ut labore.</p>
                            <a href="services.html" class="more-btn">
                                <i class='bx bx-plus'></i>
                            </a>
                        </div>
                    </div>

                    <div class="service-card">
                        <a href="services.html">
                            <img src="{{ asset('assets/img/service/2.jpg') }}" alt="Service Images">
                        </a>
                        <div class="service-content">
                            <a href="services.html"><h3>Package Design</h3></a>
                            <p>Lorem ipsum dolor sit amet, consect is etur adipiscing elit, sed do eiusmo gd  tempor incididunt ut labore.</p>
                            <a href="services.html" class="more-btn">
                                <i class='bx bx-plus'></i>
                            </a>
                        </div>
                    </div>

                    <div class="service-card">
                        <a href="services.html">
                            <img src="{{ asset('assets/img/service/3.jpg') }}" alt="Service Images">
                        </a>
                        <div class="service-content">
                            <a href="services.html"><h3>Pattern Design</h3></a>
                            <p>Lorem ipsum dolor sit amet, consect is etur adipiscing elit, sed do eiusmo gd  tempor incididunt ut labore.</p>
                            <a href="services.html" class="more-btn">
                                <i class='bx bx-plus'></i>
                            </a>
                        </div>
                    </div>

                    <div class="service-card">
                        <a href="services.html">
                            <img src="{{ asset('assets/img/service/4.jpg') }}" alt="Service Images">
                        </a>
                        <div class="service-content">
                            <a href="services.html"><h3>Book Cover</h3></a>
                            <p>Lorem ipsum dolor sit amet, consect is etur adipiscing elit, sed do eiusmo gd  tempor incididunt ut labore.</p>
                            <a href="services.html" class="more-btn">
                                <i class='bx bx-plus'></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Service Area End -->

        <!-- Product Area -->
        <section class="product-area pb-70">
            <div class="container">
                <div class="section-title text-center">
                    <span>Product</span>
                    <h2>We Have Some Pre-ready Demo Product</h2>
                    <p>
                        What indication best sick be project proposal in attempt, train of the showed
                        some a forth. That homeless, won't many of goals thoughts volumes felt.
                    </p>
                </div>
                <div class="row pt-45 justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="product-card">
                            <a href="product-details.html">
                                <img src="{{ asset('assets/img/products/1.jpg') }}" alt="Products Images">
                            </a>
                            <div class="product-content">
                                <a href="product-details.html">
                                    <h3>Package Design</h3>
                                </a>
                                <p><span>$29</span> +vat</p>
                                <div class="product-cart">
                                    <ul>
                                        <li>
                                            <a href="product-details.html">
                                                <i class='bx bx-heart'></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="cart.html">
                                                <i class='bx bx-cart'></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="product-card">
                            <a href="product-details.html">
                                <img src="{{ asset('assets/img/products/2.jpg') }}" alt="Products Images">
                            </a>
                            <div class="product-content">
                                <a href="product-details.html">
                                    <h3>T-shirt Design</h3>
                                </a>
                                <p><span>$20</span> +vat</p>
                                <div class="product-cart">
                                    <ul>
                                        <li>
                                            <a href="product-details.html">
                                                <i class='bx bx-heart'></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="cart.html">
                                                <i class='bx bx-cart'></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="product-card">
                            <a href="product-details.html">
                                <img src="{{ asset('assets/img/products/3.jpg') }}" alt="Products Images">
                            </a>
                            <div class="product-content">
                                <a href="product-details.html">
                                    <h3>Cover Van</h3>
                                </a>
                                <p><span>$30</span> +vat</p>
                                <div class="product-cart">
                                    <ul>
                                        <li>
                                            <a href="product-details.html">
                                                <i class='bx bx-heart'></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="cart.html">
                                                <i class='bx bx-cart'></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="product-card">
                            <a href="product-details.html">
                                <img src="{{ asset('assets/img/products/4.jpg') }}" alt="Products Images">
                            </a>
                            <div class="product-content">
                                <a href="product-details.html">
                                    <h3>Mug Design</h3>
                                </a>
                                <p><span>$10</span> +vat</p>
                                <div class="product-cart">
                                    <ul>
                                        <li>
                                            <a href="product-details.html">
                                                <i class='bx bx-heart'></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="cart.html">
                                                <i class='bx bx-cart'></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="product-card">
                            <a href="product-details.html">
                                <img src="{{ asset('assets/img/products/5.jpg') }}" alt="Products Images">
                            </a>
                            <div class="product-content">
                                <a href="product-details.html">
                                    <h3>Book Cover</h3>
                                </a>
                                <p><span>$15</span> +vat</p>
                                <div class="product-cart">
                                    <ul>
                                        <li>
                                            <a href="product-details.html">
                                                <i class='bx bx-heart'></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="cart.html">
                                                <i class='bx bx-cart'></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="product-card">
                            <a href="product-details.html">
                                <img src="{{ asset('assets/img/products/6.jpg') }}" alt="Products Images">
                            </a>
                            <div class="product-content">
                                <a href="product-details.html">
                                    <h3>Astronaut Cover</h3>
                                </a>
                                <p><span>$35</span> +vat</p>
                                <div class="product-cart">
                                    <ul>
                                        <li>
                                            <a href="product-details.html">
                                                <i class='bx bx-heart'></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="cart.html">
                                                <i class='bx bx-cart'></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-shape">
                <img src="{{ asset('assets/img/products/shape.png') }}" alt="Products Shape">
            </div>
        </section>
        <!-- Product Area End -->

        <!-- Price Area -->
        <div class="price-area pb-70">
            <div class="container">
                <div class="section-title text-center">
                    <span>Pricing Table</span>
                    <h2>We Have Pre-ready Pricing Plan for Our Services</h2>
                    <p>
                        It is a long established fact that a reader will be 
                        distracted by the readable content of a page when looking at its layout.
                    </p>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-12 pt-45">
                        <div class="tabs-item-list">
                            <ul id="tabs-item" class="text-center">
                                <li class="active">
                                    <a href="#monthly" class="prices-tab">Monthly</a>
                                </li> 
                                <li>
                                    <a href="#yearly" class="prices-tab">Yearly</a>
                                </li> 
                            </ul> 
                        </div>
                    </div>
                </div>
                <div id="prices-content">
                    <div id="monthly" class="active prices-content-area animated">
                        <div class="row justify-content-center">
                            <div class="col-lg-4 col-sm-6">
                                <div class="single-price">
                                    <span>Basic Plan</span>
                                    <div class="single-price-title">
                                        <h2><sup>$</sup>30<sub>/month</sub></h2>
                                    </div>
                                    <ul>
                                        <li>Brand Identy</li>
                                        <li>Package Design</li>
                                        <li>Web Application</li>
                                        <li>Bill Board</li>
                                        <li class="color-gray"><del>Tshirt Design</del></li>
                                        <li class="color-gray"><del>Vector Art</del></li>
                                        <li class="color-gray"><del>Print Ready Source</del></li>
                                    </ul>
                                    <a href="pricing.html" class="get-btn">Get Stated</a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-sm-6">
                                <div class="single-price current">
                                    <span>Standard Plan</span>
                                    <div class="single-price-title">
                                        <h2><sup>$</sup>60<sub>/month</sub></h2>
                                    </div>
                                    <ul>
                                        <li>Brand Identy</li>
                                        <li>Package Design</li>
                                        <li>Web Application</li>
                                        <li>Bill Board</li>
                                        <li>Tshirt Design</li>
                                        <li class="color-gray"><del>Vector Art</del></li>
                                        <li class="color-gray"><del>Print Ready Source</del></li>
                                    </ul>
                                    <a href="pricing.html" class="get-btn">Get Stated</a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-sm-6  ">
                                <div class="single-price">
                                    <span>Premium Plan</span>
                                    <div class="single-price-title">
                                        <h2><sup>$</sup>90<sub>/month</sub></h2>
                                    </div>
                                    <ul>
                                        <li>Brand Identy</li>
                                        <li>Package Design</li>
                                        <li>Web Application</li>
                                        <li>Bill Board</li>
                                        <li>Tshirt Design</li>
                                        <li>Vector Art</li>
                                        <li> Print Ready Source</li>
                                    </ul>
                                    <a href="pricing.html" class="get-btn">Get Stated</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="yearly" class="animated prices-content-area">
                        <div class="row justify-content-center">
                            <div class="col-lg-4 col-sm-6">
                                <div class="single-price">
                                    <span>Basic Plan</span>
                                    <div class="single-price-title">
                                        <h2><sup>$</sup>70<sub>/Year</sub></h2>
                                    </div>
                                    <ul>
                                        <li>Brand Identy</li>
                                        <li>Package Design</li>
                                        <li>Web Application</li>
                                        <li>Bill Board</li>
                                        <li class="color-gray"><del>Tshirt Design</del></li>
                                        <li class="color-gray"><del>Vector Art</del></li>
                                        <li class="color-gray"><del>Print Ready Source</del></li>
                                    </ul>
                                    <a href="pricing.html" class="get-btn">Get Stated</a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-sm-6">
                                <div class="single-price current">
                                    <span>Standard Plan</span>
                                    <div class="single-price-title">
                                        <h2><sup>$</sup>120<sub>/Year</sub></h2>
                                    </div>
                                    <ul>
                                        <li>Brand Identy</li>
                                        <li>Package Design</li>
                                        <li>Web Application</li>
                                        <li>Bill Board</li>
                                        <li>Tshirt Design</li>
                                        <li class="color-gray"><del>Vector Art</del></li>
                                        <li class="color-gray"><del>Print Ready Source</del></li>
                                    </ul>
                                    <a href="pricing.html" class="get-btn">Get Stated</a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-sm-6  ">
                                <div class="single-price">
                                    <span>Premium Plan</span>
                                    <div class="single-price-title">
                                        <h2><sup>$</sup>170<sub>/Year</sub></h2>
                                    </div>
                                    <ul>
                                        <li>Brand Identy</li>
                                        <li>Package Design</li>
                                        <li>Web Application</li>
                                        <li>Bill Board</li>
                                        <li>Tshirt Design</li>
                                        <li>Vector Art</li>
                                        <li> Print Ready Source</li>
                                    </ul>
                                    <a href="pricing.html" class="get-btn">Get Stated</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Price Area End -->

        <!-- Designer Area -->
        <div class="designer-area pb-70">
            <div class="container">
                <div class="section-title text-center">
                    <span>Our Designer</span>
                    <h2>Our Company Leads by Professional Designer</h2>
                    <p>
                        What indication best sick be project proposal in attempt, train of the showed
                        some a forth. That homeless, won't many of goals thoughts volumes felt.
                    </p>
                </div>
                <div class="row pt-45 justify-content-center">
                    <div class="col-lg-3 col-sm-6">
                        <div class="designer-card">
                            <div class="designer-img">
                                <a href="designer.html">
                                    <img src="{{ asset('assets/img/designer/1.jpg') }}" alt="Designer Images">
                                </a>
                            </div>
                            <div class="designer-content">
                                <a href="designer.html">
                                    <h3>John Doe</h3>
                                </a>
                                <span>Director</span>
                                <div class="social-icon">
                                    <ul>
                                        <li>
                                            <a href="https://www.facebook.com/login/" target="_blank" >
                                                <i class='bx bxl-facebook'></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://twitter.com/login" target="_blank" >
                                                <i class='bx bxl-twitter' ></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.instagram.com/accounts/login/" target="_blank" >
                                                <i class='bx bxl-instagram' ></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="designer-card">
                            <div class="designer-img">
                                <a href="designer.html">
                                    <img src="{{ asset('assets/img/designer/2.jpg') }}" alt="Designer Images">
                                </a>
                            </div>
                            <div class="designer-content">
                                <a href="designer.html">
                                    <h3>John Smith</h3>
                                </a>
                                <span>Product Designer</span>
                                <div class="social-icon">
                                    <ul>
                                        <li>
                                            <a href="https://www.facebook.com/login/" target="_blank" >
                                                <i class='bx bxl-facebook'></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://twitter.com/login" target="_blank" >
                                                <i class='bx bxl-twitter' ></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.instagram.com/accounts/login/" target="_blank" >
                                                <i class='bx bxl-instagram' ></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="designer-card">
                            <div class="designer-img">
                                <a href="designer.html">
                                    <img src="{{ asset('assets/img/designer/3.jpg') }}" alt="Designer Images">
                                </a>
                            </div>
                            <div class="designer-content">
                                <a href="designer.html">
                                    <h3>Evanaa</h3>
                                </a>
                                <span>llustrator Designer</span>
                                <div class="social-icon">
                                    <ul>
                                        <li>
                                            <a href="https://www.facebook.com/login/" target="_blank" >
                                                <i class='bx bxl-facebook'></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://twitter.com/login" target="_blank" >
                                                <i class='bx bxl-twitter' ></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.instagram.com/accounts/login/" target="_blank" >
                                                <i class='bx bxl-instagram' ></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="designer-card">
                            <div class="designer-img">
                                <a href="designer.html">
                                    <img src="{{ asset('assets/img/designer/4.jpg') }}" alt="Designer Images">
                                </a>
                            </div>
                            <div class="designer-content">
                                <a href="designer.html">
                                    <h3>Knot Doe</h3>
                                </a>
                                <span>Mockup Specialist</span>
                                <div class="social-icon">
                                    <ul>
                                        <li>
                                            <a href="https://www.facebook.com/login/" target="_blank" >
                                                <i class='bx bxl-facebook'></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://twitter.com/login" target="_blank" >
                                                <i class='bx bxl-twitter' ></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.instagram.com/accounts/login/" target="_blank" >
                                                <i class='bx bxl-instagram' ></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Designer Area End -->
        
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
        
        <!-- Blog Area -->
        <div class="blog-area pb-70">
            <div class="container">
                <div class="section-title text-center">
                    <span>Blogs</span>
                    <h2>Our Regular Blog Post</h2>
                    <p>
                        What indication best sick be project proposal in attempt, train of the showed
                        some a forth. That homeless, won't many of goals thoughts volumes felt.
                    </p>
                </div>
                <div class="row pt-45 justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-card">
                            <a href="blog-details.html">
                                <img src="{{ asset('assets/img/blog/1.jpg') }}" alt="Blog Images">
                            </a>
                            
                            <div class="blog-content">
                                <a href="blog-details.html">
                                    <h3>Work Once Print 100+</h3>
                                </a>
                                <ul class="blog-admin">
                                    <li>
                                        <a href="blog-details.html">
                                            <i class='bx bxs-user'></i>Admin
                                        </a>
                                    </li>
                                    <li>
                                        <i class='bx bx-calendar-alt' ></i>
                                        18 May 2024
                                    </li>
                                </ul>
                                <p>Lorem ipsum dolor sit amet, consect is etur adipiscing elit.</p>
                                <a href="blog-details.html" class="read-more-btn">Read More <i class='bx bxs-chevrons-right'></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="blog-card">
                            <a href="blog-details.html">
                                <img src="{{ asset('assets/img/blog/2.jpg') }}" alt="Blog Images">
                            </a>
                            
                            <div class="blog-content">
                                <a href="blog-details.html">
                                    <h3>Keep Your Print Great</h3>
                                </a>
                                <ul class="blog-admin">
                                    <li>
                                        <a href="blog-details.html">
                                            <i class='bx bxs-user'></i>Admin
                                        </a>
                                    </li>
                                    <li>
                                        <i class='bx bx-calendar-alt' ></i>
                                        18 May 2024
                                    </li>
                                </ul>
                                <p>Lorem ipsum dolor sit amet, consect is etur adipiscing elit.</p>
                                <a href="blog-details.html" class="read-more-btn">Read More <i class='bx bxs-chevrons-right'></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6  ">
                        <div class="blog-card">
                            <a href="blog-details.html">
                                <img src="{{ asset('assets/img/blog/3.jpg') }}" alt="Blog Images">
                            </a>
                            
                            <div class="blog-content">
                                <a href="blog-details.html">
                                    <h3>Digital Print is Science</h3>
                                </a>
                                <ul class="blog-admin">
                                    <li>
                                        <a href="blog-details.html">
                                            <i class='bx bxs-user'></i>Admin
                                        </a>
                                    </li>
                                    <li>
                                        <i class='bx bx-calendar-alt' ></i>
                                        18 May 2024
                                    </li>
                                </ul>
                                <p>Lorem ipsum dolor sit amet, consect is etur adipiscing elit.</p>
                                <a href="blog-details.html" class="read-more-btn">Read More <i class='bx bxs-chevrons-right'></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog Area End -->
        
@endsection
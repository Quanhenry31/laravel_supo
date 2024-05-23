<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="author" content="Untree.co" />
    <link rel="shortcut icon" href="{{asset("furni/css/favicon.png")}}" />

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap4" />

    <!-- Bootstrap CSS -->
    <link href="{{asset('furni/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet" />
    <link href="{{asset('furni/css/tiny-slider.css')}}" rel="stylesheet" />
    <link href="{{asset('furni/css/style.css')}}" rel="stylesheet" />
    <title>
        Furni Free Bootstrap 5 Template for Furniture and Interior Design Websites
        by Untree.co
    </title>
    <style>
    a {
        text-decoration: none;
    }
    </style>
</head>

<body>
    <!-- Start Header/Navigation -->
    <nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">
        <div class="container">
            <a class="navbar-brand" href="{{ route ('user.home') }}">Furni<span>.</span></a>
            <form action="{{ route('product.search') }}" method="GET">
                <input style="border-radius: 10px;border: none;" type="text" name="query"
                    placeholder="     Enter keyword" value="{{ request('query') }}">
                <button style="border-radius: 10px;border: none; background: #3b5d50" type="submit"><i
                        class="fa fa-search" style="font-size:22px; color:#fff"></i></button>
            </form>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni"
                aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsFurni">
                <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
                    <li class="nav-item active">
                        <a class="nav-link">Home</a>
                    </li>
                    <li><a class="nav-link" href="{{ route ('user.shop') }}">Shop</a></li>
                    <li><a class="nav-link" href="about.html">About us</a></li>
                    <li><a class="nav-link" href="services.html">Services</a></li>
                    <li><a class="nav-link" href="blog.html">Blog</a></li>
                    <li><a class="nav-link" href="contact.html">Contact us</a></li>
                </ul>

                <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
                    <li class="position-relative">
                        <a class="nav-link a_user_hover" href="#">
                            <img src="{{asset('furni/images/user.svg')}}" />
                        </a>
                        <ul class="position-absolute top-100 start-0 translate-middle-x bg-light p-2  ul_hover"
                            style=" min-width: 100px; color:black; font-size: 14px; display: none;">
                            <li style="decoration: none;list-style-type: none;">{{ Auth::user()->name }}</li>

                            <li style="decoration: none;list-style-type: none; border-top:1px solid">Cài đặt</li>
                        </ul>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ route ('user.cart') }}">
                            <img src="{{asset('furni/images/cart.svg')}}" />
                            <span class="cart-notifi">{{ $cart->totalQuantity }}</span>
                        </a>
                    </li>
                    <form action="{{ route('logout') }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button
                            style="width: 20px; height: 40px; text-align: center; background-color: #3e735f;     border: 50px;"
                            class="btn btn-danger" type="submit">
                            <span
                                style="display: flex; margin: auto;   justify-content: center; line-height: 0px;font-size: 14px;">Logout</span>
                        </button>

                    </form>


                </ul>
            </div>
        </div>
    </nav>
    <!-- End Header/Navigation -->

    <!-- Start Hero Section -->
    <div class="hero">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <div class="intro-excerpt">
                        <h1>
                            Modern Interior <span clsas="d-block">Design Studio</span>
                        </h1>
                        <p class="mb-4">
                            Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet
                            velit. Aliquam vulputate velit imperdiet dolor tempor tristique.
                        </p>
                        <p>
                            <a href="" class="btn btn-secondary me-2">Shop Now</a><a href="#"
                                class="btn btn-white-outline">Explore</a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="hero-img-wrap">
                        <img src="{{asset('furni/images/couch.png')}}" class="img-fluid" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Hero Section -->

    <!-- Start Product Section -->
    <div class="product-section">
        <div class="container">
            <div class="row">
                <!-- Start Column 1 -->
                <div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
                    <h2 class="mb-4 section-title">Crafted with excellent material.</h2>
                    <p class="mb-4">
                        Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet
                        velit. Aliquam vulputate velit imperdiet dolor tempor tristique.
                    </p>
                    <p><a href="shop.html" class="btn">Explore</a></p>
                </div>
                <!-- End Column 1 -->
                @foreach($product->take(3) as $pro)
                <!-- Start Column 2 -->
                <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                    <div class="product-item">
                        <a href="{{ route ('user.oneproduct',$pro->id) }}">
                            <img src="{{$pro->image_link}}" class="img-fluid product-thumbnail" />
                            <h3 class="product-title">{{$pro->name}}</h3>
                            <strong class="product-price">${{$pro->price}}</strong>
                        </a>
                        <!-- onclick="spanHref()" -->
                        <span class="icon-cross">
                            <a href="{{ route ('user.add', $pro->id) }}">
                                <img src="{{asset('furni/images/cross.svg')}}" class="img-fluid" />
                            </a>
                        </span>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- End Product Section -->

    <!-- Start Why Choose Us Section -->
    <div class="why-choose-section">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-6">
                    <h2 class="section-title">Why Choose Us</h2>
                    <p>
                        Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet
                        velit. Aliquam vulputate velit imperdiet dolor tempor tristique.
                    </p>

                    <div class="row my-5">
                        <div class="col-6 col-md-6">
                            <div class="feature">
                                <div class="icon">
                                    <img src="{{asset('furni/images/truck.svg')}}" alt="Image" class="imf-fluid" />
                                </div>
                                <h3>Fast &amp; Free Shipping</h3>
                                <p>
                                    Donec vitae odio quis nisl dapibus malesuada. Nullam ac
                                    aliquet velit. Aliquam vulputate.
                                </p>
                            </div>
                        </div>

                        <div class="col-6 col-md-6">
                            <div class="feature">
                                <div class="icon">
                                    <img src="{{asset('furni/images/bag.svg')}}" alt="Image" class="imf-fluid" />
                                </div>
                                <h3>Easy to Shop</h3>
                                <p>
                                    Donec vitae odio quis nisl dapibus malesuada. Nullam ac
                                    aliquet velit. Aliquam vulputate.
                                </p>
                            </div>
                        </div>

                        <div class="col-6 col-md-6">
                            <div class="feature">
                                <div class="icon">
                                    <img src="{{asset('furni/images/support.svg')}}" alt="Image" class="imf-fluid" />
                                </div>
                                <h3>24/7 Support</h3>
                                <p>
                                    Donec vitae odio quis nisl dapibus malesuada. Nullam ac
                                    aliquet velit. Aliquam vulputate.
                                </p>
                            </div>
                        </div>

                        <div class="col-6 col-md-6">
                            <div class="feature">
                                <div class="icon">
                                    <img src="{{asset('furni/images/return.svg')}}" alt="Image" class="imf-fluid" />
                                </div>
                                <h3>Hassle Free Returns</h3>
                                <p>
                                    Donec vitae odio quis nisl dapibus malesuada. Nullam ac
                                    aliquet velit. Aliquam vulputate.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="img-wrap">
                        <img src="{{asset('furni/images/why-choose-us-img.jpg')}}" alt="Image" class="img-fluid" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Why Choose Us Section -->

    <!-- Start We Help Section -->
    <div class="we-help-section">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <div class="imgs-grid">
                        <div class="grid grid-1">
                            <img src="{{asset('furni/images/img-grid-1.jpg')}}" alt="Untree.co" />
                        </div>
                        <div class="grid grid-2">
                            <img src="{{asset('furni/images/img-grid-2.jpg')}}" alt="Untree.co" />
                        </div>
                        <div class="grid grid-3">
                            <img src="{{asset('furni/images/img-grid-3.jpg')}}" alt="Untree.co" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 ps-lg-5">
                    <h2 class="section-title mb-4">
                        We Help You Make Modern Interior Design
                    </h2>
                    <p>
                        Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio
                        quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam
                        vulputate velit imperdiet dolor tempor tristique. Pellentesque
                        habitant morbi tristique senectus et netus et malesuada
                    </p>

                    <ul class="list-unstyled custom-list my-4">
                        <li>Donec vitae odio quis nisl dapibus malesuada</li>
                        <li>Donec vitae odio quis nisl dapibus malesuada</li>
                        <li>Donec vitae odio quis nisl dapibus malesuada</li>
                        <li>Donec vitae odio quis nisl dapibus malesuada</li>
                    </ul>
                    <p><a herf="#" class="btn">Explore</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- End We Help Section -->

    <!-- Start Popular Product -->
    <div class="popular-product">
        <div class="container">
            <div class="row">
                <!-- start -->
                @foreach($product->take(3) as $pro)
                <div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
                    <div class="product-item-sm d-flex">
                        <div class="thumbnail">
                            <img src="{{$pro->image_link}}" alt="Image" class="img-fluid" />
                        </div>
                        <div class="pt-3">
                            <h3>{{$pro->name}}</h3>
                            <p>
                                {{$pro->title}}
                            </p>
                            <p><a href="#">Read More</a></p>
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- end -->

            </div>
        </div>
    </div>
    <!-- End Popular Product -->

    <!-- Start Testimonial Slider -->
    <div class="testimonial-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 mx-auto text-center">
                    <h2 class="section-title">Testimonials</h2>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="testimonial-slider-wrap text-center">
                        <div id="testimonial-nav">
                            <span class="prev" data-controls="prev"><span class="fa fa-chevron-left"></span></span>
                            <span class="next" data-controls="next"><span class="fa fa-chevron-right"></span></span>
                        </div>

                        <div class="testimonial-slider">
                            <div class="item">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8 mx-auto">
                                        <div class="testimonial-block text-center">
                                            <blockquote class="mb-5">
                                                <p>
                                                    &ldquo;Donec facilisis quam ut purus rutrum
                                                    lobortis. Donec vitae odio quis nisl dapibus
                                                    malesuada. Nullam ac aliquet velit. Aliquam
                                                    vulputate velit imperdiet dolor tempor tristique.
                                                    Pellentesque habitant morbi tristique senectus et
                                                    netus et malesuada fames ac turpis egestas. Integer
                                                    convallis volutpat dui quis scelerisque.&rdquo;
                                                </p>
                                            </blockquote>

                                            <div class="author-info">
                                                <div class="author-pic">
                                                    <img src="{{asset('furni/images/person-1.png')}}" alt="Maria Jones"
                                                        class="img-fluid" />
                                                </div>
                                                <h3 class="font-weight-bold">Maria Jones</h3>
                                                <span class="position d-block mb-3">CEO, Co-Founder, XYZ Inc.</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END item -->

                            <div class="item">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8 mx-auto">
                                        <div class="testimonial-block text-center">
                                            <blockquote class="mb-5">
                                                <p>
                                                    &ldquo;Donec facilisis quam ut purus rutrum
                                                    lobortis. Donec vitae odio quis nisl dapibus
                                                    malesuada. Nullam ac aliquet velit. Aliquam
                                                    vulputate velit imperdiet dolor tempor tristique.
                                                    Pellentesque habitant morbi tristique senectus et
                                                    netus et malesuada fames ac turpis egestas. Integer
                                                    convallis volutpat dui quis scelerisque.&rdquo;
                                                </p>
                                            </blockquote>

                                            <div class="author-info">
                                                <div class="author-pic">
                                                    <img src="{{asset('furni/images/person-1.png')}}" alt="Maria Jones"
                                                        class="img-fluid" />
                                                </div>
                                                <h3 class="font-weight-bold">Maria Jones</h3>
                                                <span class="position d-block mb-3">CEO, Co-Founder, XYZ Inc.</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END item -->

                            <div class="item">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8 mx-auto">
                                        <div class="testimonial-block text-center">
                                            <blockquote class="mb-5">
                                                <p>
                                                    &ldquo;Donec facilisis quam ut purus rutrum
                                                    lobortis. Donec vitae odio quis nisl dapibus
                                                    malesuada. Nullam ac aliquet velit. Aliquam
                                                    vulputate velit imperdiet dolor tempor tristique.
                                                    Pellentesque habitant morbi tristique senectus et
                                                    netus et malesuada fames ac turpis egestas. Integer
                                                    convallis volutpat dui quis scelerisque.&rdquo;
                                                </p>
                                            </blockquote>

                                            <div class="author-info">
                                                <div class="author-pic">
                                                    <img src="{{asset('furni/images/person-1.png')}}" alt=" Maria
                                                        Jones" class="img-fluid" />
                                                </div>
                                                <h3 class="font-weight-bold">Maria Jones</h3>
                                                <span class="position d-block mb-3">CEO, Co-Founder, XYZ Inc.</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Testimonial Slider -->

    <!-- Start Blog Section -->
    <div class="blog-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-6">
                    <h2 class="section-title">Recent Blog</h2>
                </div>
                <div class="col-md-6 text-start text-md-end">
                    <a href="#" class="more">View All Posts</a>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
                    <div class="post-entry">
                        <a href="#" class="post-thumbnail"><img src="{{asset('furni/images/post-1.jpg')}}" alt="Image"
                                class="img-fluid" /></a>
                        <div class="post-content-entry">
                            <h3><a href="#">First Time Home Owner Ideas</a></h3>
                            <div class="meta">
                                <span>by <a href="#">Kristin Watson</a></span>
                                <span>on <a href="#">Dec 19, 2021</a></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
                    <div class="post-entry">
                        <a href="#" class="post-thumbnail"><img src="{{asset('furni/images/post-2.jpg')}}" alt="Image"
                                class="img-fluid" /></a>
                        <div class="post-content-entry">
                            <h3><a href="#">How To Keep Your Furniture Clean</a></h3>
                            <div class="meta">
                                <span>by <a href="#">Robert Fox</a></span>
                                <span>on <a href="#">Dec 15, 2021</a></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
                    <div class="post-entry">
                        <a href="#" class="post-thumbnail"><img src="{{asset('furni/images/post-3.jpg')}}" alt="Image"
                                class="img-fluid" /></a>
                        <div class="post-content-entry">
                            <h3><a href="#">Small Space Furniture Apartment Ideas</a></h3>
                            <div class="meta">
                                <span>by <a href="#">Kristin Watson</a></span>
                                <span>on <a href="#">Dec 12, 2021</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog Section -->

    <!-- Start Footer Section -->
    @include('layouts.components.footer')

    <!-- End Footer Section -->

    <script src="{{asset('furni/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('furni/js/tiny-slider.js')}}"></script>
    <script src="{{asset('furni/js/custom.js')}}"></script>
    <script>
    function spanHref() {
        // Chuyển hướng đến địa chỉ sản phẩm khi span được nhấp vào
        window.location.href = "{{ route ('user.cart',$pro->id) }}";
    }
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
    $(document).ready(function() {
        $('.a_user_hover').click(function(e) {
            e.preventDefault(); // Ngăn chặn hành động mặc định của thẻ a
            $('.ul_hover').toggle(); // Hiển thị hoặc ẩn ul
        });
    });
    </script>
</body>

</html>
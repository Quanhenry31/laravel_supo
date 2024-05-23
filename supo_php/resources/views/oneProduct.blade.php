<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

    <!-- title -->
    <title>One Product</title>

    <!-- favicon -->
    <link rel="shortcut icon" type="image/png" href="{{asset('furni/images/sofa.png')}}">
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <!-- fontawesome -->
    <link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}">
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <!-- owl carousel -->
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.css')}}">
    <!-- magnific popup -->
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
    <!-- animate css -->
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
    <!-- mean menu css -->
    <link rel="stylesheet" href="{{asset('assets/css/meanmenu.min.css')}}">
    <!-- main style -->
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
    <!-- responsive -->
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
    <!-- Bootstrap CSS -->
    <link href="{{asset('furni/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet" />
    <link href="{{asset('furni/css/tiny-slider.css')}}" rel="stylesheet" />
    <link href="{{asset('furni/css/style.css')}}" rel="stylesheet" />

</head>

<body>

    <!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->

    <!-- header -->
    <nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">
        <div class="container">
            <a class="navbar-brand" href="home">Furni<span>.</span></a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsFurni">
                <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
                    <li class="nav-item active">
                        <a class="nav-link">Home</a>
                    </li>
                    <li><a class="nav-link" href="shop">Shop</a></li>
                    <li><a class="nav-link" href="about.html">About us</a></li>
                    <li><a class="nav-link" href="services.html">Services</a></li>
                    <li><a class="nav-link" href="blog.html">Blog</a></li>
                    <li><a class="nav-link" href="contact.html">Contact us</a></li>
                </ul>

                <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
                    <li>
                        <a class="nav-link" href="#"><img src="{{asset('furni/images/user.svg')}}" /></a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ route ('user.cart') }}"><img src="{{asset('furni/images/cart.svg')}}" /></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- end header -->

    <!-- search area -->
    <div class="search-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <span class="close-btn"><i class="fas fa-window-close"></i></span>
                    <div class="search-bar">
                        <div class="search-bar-tablecell">
                            <h3>Search For:</h3>
                            <input type="text" placeholder="Keywords">
                            <button type="submit">Search <i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end search arewa -->

    <!-- breadcrumb-section -->

    <!-- end breadcrumb section -->

    <!-- single product -->
    <div class="single-product mt-150 mb-150">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="single-product-img">
                        <img src="{{ $product->image_link }}" alt="">
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="single-product-content">
                        <h3>{{ $product->name }}</h3>
                        <p class="single-product-pricing"><span>Giá:</span> ${{ $product->price }}</p>
                        <p>{{ $product->title }}</p>
                        <div class="single-product-form">
                            <form action="{{route('user.add', $product->id) }}" method="GET">
                                <input type="number" name='quantity' placeholder="0">
                                <button type="number" class="btn btn-primary">Add to
                                    Cart</button>
                            </form>
                            <p><strong>Categories: </strong>{{$catalog->name}}</p>

                        </div>
                        <h4>Share:</h4>
                        <ul class="product-share">
                            <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href=""><i class="fab fa-twitter"></i></a></li>
                            <li><a href=""><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a href=""><i class="fab fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end single product -->

    <!-- more products -->
    <div class="more-products mb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="section-title">
                        <h3><span class="orange-text">Related</span> Products</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, fuga quas itaque eveniet
                            beatae optio.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="single-product.html"><img src="https://themewagon.github.io/fruitkha/assets/img/products/product-img-5.jpg" alt=""></a>
                        </div>
                        <h3>Strawberry</h3>
                        <p class="product-price"><span>Per Kg</span> 85$ </p>
                        <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="single-product.html"><img src="https://themewagon.github.io/fruitkha/assets/img/products/product-img-5.jpg" alt=""></a>
                        </div>
                        <h3>Berry</h3>
                        <p class="product-price"><span>Per Kg</span> 70$ </p>
                        <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3 text-center">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="single-product.html"><img src="https://themewagon.github.io/fruitkha/assets/img/products/product-img-5.jpg" alt=""></a>
                        </div>
                        <h3>Lemon</h3>
                        <p class="product-price"><span>Per Kg</span> 35$ </p>
                        <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end more products -->

    <!-- logo carousel -->

    <!-- end logo carousel -->
    @include('layouts.components.footer')
    <style>
        .border-top.copyright {
            background-color: white;
        }

        .copyright p {
            margin: 0;
            color: #6a6a6a;
            opacity: 0.7;
            padding: 16px 0;
            font-size: 15px;
        }

        ul.list-unstyled.d-inline-flex.ms-auto {
            color: #6a6a6a;
        }

        thead.cart-table-head {
            border: 1px solid rgba(0, 0, 0, 0.125);

        }

        .cart-table-wrap tbody tr td {
            border: 1px solid rgba(0, 0, 0, 0.125);

            padding: 20px 0;
            color: #051922;
        }

        .total-section table.total-table {
            border: 1px solid rgba(0, 0, 0, 0.125);

            width: 100%;
        }

        tr.total-data {
            border: 1px solid rgba(0, 0, 0, 0.125);
        }

        table.total-table tbody tr.total-data td {
            border: none;
            padding: none;
        }

        table.total-table tbody tr.total-data td {
            /* border: 1px solid #efefef; */
            padding: 19px 15px;
        }

        a.boxed-btn {
            text-decoration: none;
        }

        a {
            text-decoration: none;
        }
    </style>
    <!-- footer -->


    <script src="{{asset('assets/js/jquery-1.11.3.min.js')}}"></script>
    <!-- bootstrap -->
    <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- count down -->
    <script src="{{asset('assets/js/jquery.countdown.js')}}"></script>
    <!-- isotope -->
    <script src="{{asset('assets/js/jquery.isotope-3.0.6.min.js')}}"></script>
    <!-- waypoints -->
    <script src="{{asset('assets/js/waypoints.js')}}"></script>
    <!-- owl carousel -->
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    <!-- magnific popup -->
    <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
    <!-- mean menu -->
    <script src="{{asset('assets/js/jquery.meanmenu.min.js')}}"></script>
    <!-- sticker js -->
    <script src="{{asset('assets/js/sticker.js')}}"></script>
    <!-- main js -->
    <script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>
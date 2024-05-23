<!-- /*
* Bootstrap 5
* Template Name: Furni
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="favicon.png">

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap4" />

    <!-- Bootstrap CSS -->
    <link href="{{asset('furni/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet" />
    <link href="{{asset('furni/css/tiny-slider.css')}}" rel="stylesheet" />
    <link href="{{asset('furni/css/style.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Furni Free Bootstrap 5 Template for Furniture and Interior Design Websites by Untree.co </title>
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
                    <li class="nav-item ">
                        <a class="nav-link" href="{{ route ('user.home') }}">Home</a>
                    </li>
                    <li class="active"><a class="nav-link">Shop</a></li>
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
                        <a class="nav-link" href="{{ route ('user.cart') }}"><img
                                src="{{asset('furni/images/cart.svg')}}" /></a>
                    </li>
                </ul>
            </div>
        </div>

    </nav>
    <!-- End Header/Navigation -->

    <!-- Start Hero Section -->
    <div class="hero">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-4">
                    <div class="intro-excerpt">
                        <h1>Shop</h1>
                    </div>

                </div>
                <div class="col-lg-7">

                </div>
            </div>
        </div>
    </div>
    <!-- End Hero Section -->



    <div class="untree_co-section product-section before-footer-section">

        <select name="select_product" id="select_product">
            <option value="New">New</option>
            <option value="Hot">Hot</option>
            <option value="Likes">Likes</option>
            <option value="View">View</option>
        </select>


        <div class="container">

            <div class="row">
                @foreach($product->take(10) as $pro)

                <!-- Start Column 1 -->
                <div class="col-12 col-md-4 col-lg-3 mb-5">
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

                <!-- End Column 1 -->


            </div>
        </div>
    </div>


    <!-- Start Footer Section -->
    @include('layouts.components.footer')
    <!-- End Footer Section -->

    <style>
    a {
        text-decoration: none;
    }
    </style>
    <script src="{{asset('furni/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('furni/js/tiny-slider.js')}}"></script>
    <script src="{{asset('furni/js/custom.js')}}"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

    <!-- title -->
    <title>Check</title>

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
    <!-- header -->
    <nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">
        <div class="container">
            <a class="navbar-brand" href="user/home">Furni<span>.</span></a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni"
                aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsFurni">
                <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
                    <li class="nav-item active">
                        <a class="nav-link">Home</a>
                    </li>
                    <li><a class="nav-link" href="user/shop">Shop</a></li>
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
                        <a class="nav-link" href="cart.html"><img src="{{asset('furni/images/cart.svg')}}" /></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Header/Navigation -->

    <!-- Start Hero Section -->

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



    <!-- check out section -->
    <div class="checkout-section mt-150 mb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="checkout-accordion-wrap">
                        <div class="accordion" id="accordionExample">
                            <div class="card single-accordion">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link border-0" type="button" data-toggle="collapse"
                                            data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"
                                            style="border-radius: 0;">
                                            Billing Address
                                        </button>
                                    </h5>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="billing-address-form">
                                            <form action="{{route('check.store')}}" method="POST">
                                                @csrf

                                                <p><input type="text" name="user_name" placeholder="user_name"></p>
                                                <p><input type="email" name="user_email" placeholder="user_email">
                                                </p>
                                                <p><input type="text" name="user_phone" placeholder="user_phone">
                                                </p>
                                                <p><input type="text" name="payment_cart" placeholder="payment_cart">
                                                </p>
                                                <p><input type="text" name="payment_info" placeholder="payment_info">
                                                </p>
                                                <p><textarea name="message" id="bill" cols="30" rows="10"
                                                        placeholder="message"></textarea></p>
                                                <button class="btn btn-primary">Thanh toán</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card single-accordion">
                                <div class="card-header" id="headingTwo">
                                    <h5 class="mb-0">
                                        <button style="border-radius: 0;" class="btn btn-link collapsed" type="button"
                                            data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">
                                            Shipping Address
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="shipping-address-form">
                                            <p>Your shipping address form is here.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card single-accordion">
                                <div class="card-header" id="headingThree">
                                    <h5 class="mb-0">
                                        <button style="border-radius: 0" class="btn btn-link collapsed" type="button"
                                            data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">
                                            Card Details
                                        </button>
                                    </h5>
                                </div>
                                <div style="border: 1px solid rgba(0, 0, 0, .125);" id="collapseThree" class="collapse"
                                    aria-labelledby="headingThree" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="card-details">
                                            <p>Your card details goes here.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="order-details-wrap">
                        <table class="border_so">
                            <thead class="border_so">
                                <tr class="border_so">
                                    <th class="border_so">Your order Details</th>
                                    <th class="border_so">Price</th>
                                </tr>
                            </thead>
                            <tbody class=" border_so">
                                <tr class="border_so">
                                    <td class="border_so">Product</td>
                                    <td class="border_so">Total</td>
                                </tr>
                                <tr class="border_so">
                                    <td class="border_so">Strawberry</td>
                                    <td class="border_so">$85.00</td>
                                </tr>
                                <tr class="border_so">
                                    <td class="border_so">Berry</td>
                                    <td class="border_so">$70.00</td>
                                </tr>
                                <tr class="border_so">
                                    <td class="border_so">Lemon</td>
                                    <td class="border_so">$35.00</td>
                                </tr>
                            </tbody>
                            <tbody class="checkout-details border_so">
                                <tr class="border_so">
                                    <td class="border_so">Subtotal</td>
                                    <td class="border_so">$190</td>
                                </tr>
                                <tr class="border_so">
                                    <td class="border_so">Shipping</td>
                                    <td class="border_so">$50</td>
                                </tr>
                                <tr class="border_so">
                                    <td class="border_so">Total</td>
                                    <td class="border_so">$240</td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end check out section -->
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

    .card.single-accordion {
        border: 1px solid rgba(0, 0, 0, .125);
    }

    .border_so {
        border: 1px solid rgba(0, 0, 0, .125);
        padding: 15px;
    }

    a.boxed-btn {
        text-decoration: none;
    }
    </style>

    <!-- footer -->
    @include('layouts.components.footer')

    <!-- jquery -->
    <!-- jquery -->
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
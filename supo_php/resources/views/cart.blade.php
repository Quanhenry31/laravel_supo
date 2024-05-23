<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

    <!-- title -->
    <title>Cart</title>

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

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni"
                aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
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

    <!-- cart -->
    <div class="cart-section mt-150 mb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="cart-table-wrap">
                        <table class="cart-table">
                            <thead class="cart-table-head">
                                <tr class="table-head-row">
                                    <th class="product-remove"></th>
                                    <th class="product-remove">STT</th>
                                    <th class="product-image">Product Image</th>
                                    <th class="product-name">Name</th>
                                    <th class="product-price">Price</th>
                                    <th class="product-quantity">Quantity</th>
                                    <th class="product-total">Total</th>
                                </tr>
                            </thead>
                            <tbody class="custom-border">
                                @foreach($cart->items as $item)
                                <tr class="table-body-row">
                                    <td class="product-remove"><a onclick="return confirm('Are you sure?')"
                                            href="{{route('user.delete' ,$item->id)}}"><i
                                                class="far fa-window-close"></i></a></td>
                                    <td class="product-remove">{{$loop->index + 1}}</td>
                                    <td class="product-image"><img src="{{$item->image_link}}" alt="">
                                    </td>
                                    <td class="product-name">{{$item->name}}</td>
                                    <td class="product-price">${{$item->price}}</td>
                                    <td class="product-quantity">
                                        <form action="{{route('user.update',$item->id)}}" method="get">
                                            <input type="number" name="quantity" placeholder="{{$item->quantity}}">
                                            <button class="btn btn-primary btn-sm">Cập nhập</button>

                                        </form>
                                    </td>
                                    <td class="product-total">${{$item->quantity*$item->price}}</td>
                                </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="total-section">
                        <table class="total-table">
                            <thead class="total-table-head">
                                <tr class="table-total-row">
                                    <th>Total</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="total-data">
                                    <td><strong>Số lượng: </strong></td>
                                    <td>{{$cart->totalQuantity}}</td>
                                </tr>
                                <tr class="total-data">
                                    <td><strong>Thành tiền: </strong></td>
                                    <td>${{$cart->totalPrice}}</td>
                                </tr>

                            </tbody>
                        </table>
                        <div class="cart-buttons">
                            <a href="cart" class="boxed-btn">Update Cart</a>
                            <a href="{{route('check.index')}}" class="boxed-btn black">Check Out</a>
                        </div>
                    </div>

                    <div class="coupon-section">
                        <h3>Apply Coupon</h3>
                        <div class="coupon-form-wrap">
                            <form action="index.html">
                                <p><input type="text" placeholder="Coupon"></p>
                                <p><input type="submit" value="Apply"></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end cart -->

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
    </style>

    <!-- footer -->
    @include('layouts.components.footer')
    <!-- end copyright -->

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
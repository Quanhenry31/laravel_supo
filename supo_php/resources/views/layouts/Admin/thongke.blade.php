@extends('layouts.Admin.layout')

@section('content')

<head>

    <!-- Favicon -->

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet" />

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

    <!-- Libraries Stylesheet -->


    <!-- Customized Bootstrap Stylesheet -->


</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-1 admin_nav" style="margin-top: 70px;">
                <!-- Nội dung của admin_nav -->
                <div class="col-1 col-sm-12  category">
                    <form action="{{ route('login') }}">
                        <div class="mb-3">
                            <div class="d-grid" style="width: 120px;
        height: 52px; backgrount-color:red">
                                <button class="btn btn-primary">Login</button>
                            </div>
                        </div>
                    </form>
                    <button onclick="TongQuan()" class="btn btn-outline-primary d-flex mb-2" style="width: 120px; height: 56px;
        align-items: center;"><i class="fas fa-tachometer-alt" aria-hidden="true"></i> <span
                            style="font-size: 0.9rem;"><span style="font-size: 0.9rem;">Tổng quan</span></span></button>
                    <button onclick="SanPham()" class="btn btn-outline-primary d-flex mb-2" style="width: 120px; height: 56px;
        align-items: center;"><i class="fas fa-barcode" aria-hidden="true"></i><span style="font-size: 0.9rem;">Sản
                            phẩm</span></button>
                    <button onclick="KhachHang()" class="btn btn-outline-primary d-flex mb-2" style="width: 120px; height: 56px;
        align-items: center;"><i class="fas fa-users" aria-hidden="true"></i> <span style="font-size: 0.9rem;">Khách
                            hàng</span></button>
                    <button onclick="NhanVien()" class="btn btn-outline-primary d-flex mb-2" style="width: 120px; height: 56px;
        align-items: center;"><i class="fas fa-user" aria-hidden="true" style="margin: 0; padding: 0;"></i><span
                            style="font-size: 0.9rem;">Nhân viên </span></button>
                    <button onclick="HoaDonNhap()" class="btn btn-outline-primary d-flex mb-2" style="width: 120px; height: 56px;
        align-items: center;"><i class="fas fa-file-import" aria-hidden="true"></i><span style="font-size: 0.9rem;">Hóa
                            đơn
                            nhập </span></button>
                    <a href="{{route('hoadon.index')}}">

                        <button onclick="HoaDonBan()" class="btn btn-outline-primary d-flex mb-2 " style="width: 120px; height: 56px;
                    align-items: center;"><i class="fas fa-shopping-cart" aria-hidden="true"></i> <span
                                style="font-size: 0.9rem;">Hóa
                                đơn
                                bán </span></button>
                    </a>
                    <a href="{{route('Apayment.index')}}">
                        <button onclick="Pay()" class="btn btn-outline-primary d-flex mb-2 " style="width: 120px; height: 56px;
        align-items: center;"><i class="fab fa-cc-visa" aria-hidden="true"></i>
                            <span style="font-size: 0.9rem;">Payment </span></button>
                    </a>
                    <button onclick="ThietLap()" class="btn btn-outline-primary d-flex" style="width: 120px; height: 56px;
        align-items: center;"><i class="fas fa-cogs" aria-hidden="true"></i>
                        <span style="font-size: 0.9rem;">Thiết lập</span>
                    </button>
                </div>


            </div>
            <div class="col-11 container">
                <!-- Nội dung của container -->

                <div class="container-fluid">
                    <div class="row">
                        <div class="col">
                            <h1 class="mb-4">Thống kê sản phẩm</h1>
                            <form>
                                <div class="content">
                                    <!-- Navbar Start -->

                                    <!-- Navbar End -->


                                    <!-- Sale & Revenue Start -->
                                    <div class="container-fluid pt-4 px-4">
                                        <div class="row g-4">
                                            <div class="col-sm-6 col-xl-3">
                                                <div
                                                    class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                                                    <i class="fa fa-chart-line fa-3x text-primary"></i>
                                                    <div class="ms-3">
                                                        <p class="mb-2">Today Sale</p>
                                                        <h6 class="mb-0">$2342</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-xl-3">
                                                <div
                                                    class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                                                    <i class="fa fa-chart-bar fa-3x text-primary"></i>
                                                    <div class="ms-3">
                                                        <p class="mb-2">Total Sale</p>
                                                        <h6 class="mb-0">$34523</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-xl-3">
                                                <div
                                                    class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                                                    <i class="fa fa-chart-area fa-3x text-primary"></i>
                                                    <div class="ms-3">
                                                        <p class="mb-2">All product</p>
                                                        <h6 class="mb-0">{{ $cart->getTotalSoldQuantity }}</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-xl-3">
                                                <div
                                                    class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                                                    <i class="fa fa-chart-pie fa-3x text-primary"></i>
                                                    <div class="ms-3">
                                                        <p class="mb-2">Total price</p>
                                                        <h6 class="mb-0">${{ $cart->getTotalRevenue }}</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Sale & Revenue End -->


                                    <!-- Sales Chart Start -->
                                    <div class="container-fluid pt-4 px-4">
                                        <div class="row g-4">
                                            <div class="col-sm-12 col-xl-6">
                                                <div class=" text-center  p-4">
                                                    <div class="d-flex align-items-center justify-content-between mb-4">
                                                        <div id="chartContainer"
                                                            data-data-points="{{ json_encode($dataPoints) }}"
                                                            style="height: 300px; width: 100%;">
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-xl-6">
                                                <div class="text-center rounded p-4">
                                                    <div class="d-flex align-items-center justify-content-between mb-4">
                                                        <div id="chartContainer2" style="height: 300px; width: 100%;">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Sales Chart End -->

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<style>
a {
    text-decoration: none;
}
</style>

<!-- JavaScript Libraries -->


<!-- Template Javascript -->
<script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
<script src="{{asset("furni/js/Thongke.js")}}"></script>
@endsection
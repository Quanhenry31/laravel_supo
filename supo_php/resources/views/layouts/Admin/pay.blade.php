@extends('layouts.Admin.layout')

@section('content')

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
                <a href="{{route('product.index')}}">
                    <button onclick="SanPham()" class="btn btn-outline-primary d-flex mb-2" style="width: 120px; height: 56px;
            align-items: center;"><i class="fas fa-barcode" aria-hidden="true"></i><span style="font-size: 0.9rem;">Sản
                            phẩm</span></button>
                </a>
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
align-items: center;"><i class="fas fa-shopping-cart" aria-hidden="true"></i> <span style="font-size: 0.9rem;">Hóa
                            đơn
                            bán </span></button>
                </a>
                <button onclick="Pay()" class="btn btn-outline-primary d-flex mb-2 " style="width: 120px; height: 56px;
    align-items: center;"><i class="fab fa-cc-visa" aria-hidden="true"></i>
                    <span style="font-size: 0.9rem;">Payment </span></button>

                <button onclick="ThietLap()" class="btn btn-outline-primary d-flex" style="width: 120px; height: 56px;
    align-items: center;"><i class="fas fa-cogs" aria-hidden="true"></i>
                    <span style="font-size: 0.9rem;">Thiết lập</span>
                </button>
            </div>


        </div>
        <div class="col-11 container">
            <!-- Nội dung của container -->

            <div style=" max-width: 100%" class=" container ">
                <div class=" card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <h3>Quản lý Payment</h3>
                            </div>
                            <div class="col-md-6">

                            </div>
                        </div>
                        <div class="card-body">
                            @if(Session::has('thongbao'))
                            <div class="alert alert-success">
                                {{Session::get('thongbao')}}
                            </div>
                            @endif
                            <table class='table table-bordered'>
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Mã Pay</th>
                                        <th>user_id</th>
                                        <th>user_name</th>
                                        <th>user_email</th>
                                        <th>user_phone</th>
                                        <th>payment_cart</th>
                                        <th>payment_info</th>
                                        <th>message</th>
                                        <th>created</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($payDetail as $pro)
                                    <tr>
                                        <td>{{++$i}}</td>
                                        <td>{{$pro->id}}</td>
                                        <td>{{$pro->user_id}}</td>
                                        <td>{{$pro->user_name}}</td>
                                        <td>{{$pro->user_email}}</td>
                                        <td>{{$pro->user_phone}}</td>
                                        <td>{{$pro->payment_cart}}</td>
                                        <td>{{$pro->payment_info}}</td>
                                        <td>{{$pro->message}}</td>
                                        <td>{{$pro->created}}</td>
                                    </tr>

                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    {{$payDetail->links()}}
                </div>
            </div>
        </div>
    </div>
    <style>
    a {
        text-decoration: none;
    }
    </style>
    @endsection
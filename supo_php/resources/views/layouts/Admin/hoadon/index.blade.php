@extends('layouts.Admin.layout')

@section('content')

<div class="container-fluid">
    <span>Wellcome - {{ Auth::user()->name }}</span>
    <div class="row">
        <div class="col-1 admin_nav" style="margin-top: 70px;">

            <!-- Nội dung của admin_nav -->
            <div class="col-1 col-sm-12  category">
                <form action="{{ route('logout') }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button
                        style="width: 120px; height: 60px;     margin-bottom: 20px; text-align: center; background-color: #3e735f; border: 50px;"
                        class="btn btn-danger" type="submit">
                        <span
                            style="display: flex; margin: auto;   justify-content: center; line-height: 0px;font-size: 14px;">Logout</span>
                    </button>

                </form>
                <a href="{{route('thongke.index')}}">
                    <button onclick="TongQuan()" class="btn btn-outline-primary d-flex mb-2" style="width: 120px; height: 56px;
    align-items: center;"><i class="fas fa-tachometer-alt" aria-hidden="true"></i> <span
                            style="font-size: 0.9rem;"><span style="font-size: 0.9rem;">Tổng quan</span></span></button>
                </a>
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

            <div style=" max-width: 100%" class=" container ">
                <div class=" card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <h3>Quản lý Hóa đơn</h3>
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
                                        <th>Mã hóa đơn</th>
                                        <th>Payment_id</th>
                                        <th>Name Product </th>
                                        <th>Số lượng</th>
                                        <th>Giá</th>
                                        <th>Thông tin</th>
                                        <th>Status</th>
                                        <th>User_id</th>
                                        <th>Thao tác</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($hoadon as $pro)
                                    <tr>
                                        <td>{{++$i}}</td>
                                        <td>{{$pro->id}}</td>
                                        <td>{{$pro->payment_id}}</td>
                                        <td>{{$pro->product->name}}</td>
                                        <td>{{$pro->qty}}</td>
                                        <td>{{$pro->price}}</td>
                                        <td>{{$pro->information}}</td>
                                        <td>{{$pro->status}}</td>
                                        <td>{{$pro->user_id}}</td>
                                        <td class="d-flex">
                                            <form action="{{route('hoadon.update',$pro->id)}}" method="post">
                                                @csrf
                                                @method('PUT')
                                                <button style="margin: 5px; " type="submit"
                                                    class="btn btn-info">Sửa</button>
                                            </form>

                                            <form action="{{route('hoadon.destroy', $pro->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button style="margin: 5px;" type="submit"
                                                    class="btn btn-danger ">Xóa</button>
                                            </form>

                                            <form action="{{route('hoadon.show', $pro->id)}}">
                                                <button style="margin: 5px; " type="submit"
                                                    class="btn btn-warning">Detail</button>
                                            </form>

                                            <form action="{{route('user.pay_detail', $pro->payment_id)}}">
                                                <button style="margin: 5px; " type="submit"
                                                    class="btn btn-success">PayDetail</button>
                                            </form>
                                        </td>
                                    </tr>

                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    {{$hoadon->links()}}
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
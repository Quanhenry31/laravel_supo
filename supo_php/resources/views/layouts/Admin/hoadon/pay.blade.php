@extends('layouts.Admin.layout')

@section('content')
<h1>Chi tiết thanh toán</h1>

<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Mã thanh toán</th>
            <th>User_id</th>
            <th>Tên người dùng</th>
            <th>Email người dùng</th>
            <th>Số điện thoại người dùng</th>
            <th>Giỏ hàng thanh toán</th>
            <th>Thông tin thanh toán</th>
            <th>Tin nhắn</th>
            <th>Ngày tạo</th>
        </tr>
    </thead>
    <tbody>
        @foreach($payDetail as $payment)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$payment->id}}</td>
            <td>{{$payment->user_id}}</td>
            <td>{{$payment->user_name}}</td>
            <td>{{$payment->user_email}}</td>
            <td>{{$payment->user_phone}}</td>
            <td>{{$payment->payment_cart}}</td>
            <td>{{$payment->payment_info}}</td>
            <td>{{$payment->message}}</td>
            <td>{{$payment->created}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
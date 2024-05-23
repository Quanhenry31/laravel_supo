@extends('layouts.Admin.layout')

@section('content')
<h1>Chi tiết hóa đơn</h1>

<table class="table">
    <thead>
        <tr>
            <th>STT</th>
            <th>Sản phẩm</th>
            <th>Mã đơn hàng</th>
            <th>Số lượng</th>
            <th>Tổng tiền</th>
        </tr>
    </thead>
    <tbody>
        @foreach($hoadonDetail as $detail)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$detail->product_id}}</td>
            <td>{{$detail->order_id}}</td>
            <td>{{$detail->quantity}}</td>
            <td>{{$detail->allMonney}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
@extends('layouts.Admin.layout')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h3>Thêm sản phẩm</h3>
                </div>
                <div class="col-md-6">
                    <a href="{{route('product.index')}}" class='btn btn-primary float-end'>Danh sách sản phẩm</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="{{route('product.store')}}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <strong>Loại sản phẩm</strong>
                            <input type="text" name="catalog_id" class="form-control" placeholder="Nhập loại sản phẩm id">
                        </div>
                        <div class="form-group">
                            <strong>Tên sản phẩm</strong>
                            <input type="text" name="name" class="form-control" placeholder="Nhập tên sản phẩm">
                        </div>
                        <div class="form-group">
                            <strong>Giá sản phẩm</strong>
                            <input type="text" name="price" class="form-control" placeholder="Nhập giá sản phẩm">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <strong>Ảnh</strong>
                            <input type="text" name="image_link" class="form-control" placeholder="Nhập link ảnh">
                        </div>
                        <div class="form-group">
                            <strong>Ngày tạo</strong>
                            <input type="text" name="created" class="form-control" placeholder="Nhập ngày tạo">
                        </div>
                        <div class="form-group">
                            <strong>Số lượng</strong>
                            <input type="text" name="view" class="form-control" placeholder="Nhập số số lượng">
                        </div>
                        <div class="form-group">
                            <strong>Nội dung</strong>
                            <input type="text" name="title" class="form-control" placeholder="Nhập nội dung">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success mt-2">Lưu</button>
            </form>
        </div>
    </div>
</div>
@endsection
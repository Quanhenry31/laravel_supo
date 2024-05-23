<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class Thongkecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $products = Product::all();
    $dataPoints = [];

    foreach ($products as $product) {
        $dataPoints[] = [
            'label' => $product->name,
            'y' => $product->price // Bạn có thể sử dụng các trường khác tùy thuộc vào yêu cầu của biểu đồ
        ];
    }

    return view('layouts.Admin.thongke', compact('dataPoints'));
}

    
}
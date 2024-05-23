<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Check;
use App\Models\HoaDonDetail;
use App\Models\Hoadon;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Controllers\AuthController;
use App\Models\User;
use App\Models\Order;
use Illuminate\Contracts\Session\Session;

class CheckController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('checkout');
    }

    /**
     * Show the form for creating a new resource.
     */


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cart = new Cart();
        $gioHang = $cart->items;
        $totalQuantity = $cart->getTotalQuantity();
        $totalPrice = $cart->getTotalPrice();
        
        $user = $request->user();
        $user_id = $user->id;
        $check = new Check([
        'status' => 'Chưa duyệt',
        'user_id' => $user_id,
        'user_name' => $request->user_name,
        'user_email' => $request->user_email,
        'user_phone' => $request->user_phone,
        'payment_cart' => $request->payment_cart,
        'payment_info'=> $request->payment_info,
        'message' => $request->message,
        'created' => now(),
        ]);
        $check->save();

        $payment_id = $check->id;

        $order = new Hoadon([
            'payment_id' => $payment_id,
            'product_id' => 2,
            'qty' =>  $totalQuantity,
            'price' => $totalPrice,
            'information' => 'hello',
            'status' => 'Chưa xác nhận',
            'user_id' => $user_id,
        ]);
        $order->save();
        $order_id = $order->id;

        foreach ($gioHang as $sanPham) {
            $existingOrderDetail = HoaDonDetail::where('order_id', $order_id)
                                                  ->where('product_id', $sanPham->id)
                                                  ->first();

            if (!$existingOrderDetail) {
                $chiTietHoaDon = new HoaDonDetail();
                $chiTietHoaDon->order_id = $order_id;
                $chiTietHoaDon->product_id = $sanPham->id; // ID của sản phẩm
                $chiTietHoaDon->quantity = $sanPham->quantity;
                $chiTietHoaDon->allMonney = $sanPham->quantity * $sanPham->price;

                $chiTietHoaDon->save();
            } else {
                $existingOrderDetail->quantity += $sanPham->quantity;
                $existingOrderDetail->allMonney += $sanPham->quantity * $sanPham->price;
                $existingOrderDetail->save();
            }
        }

        $cart->clear();


        return redirect()->route('user.home')->with('thongbao', 'Thêm sản phẩm thành công!');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        
        return view('layouts.Admin.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, product $product)
    {
        $product->update($request->all());
        return redirect()->route('product.index')->with('thongbao','Cập nhập product thành công!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(product $product)
    {
        $product->delete();
        return redirect()->route('product.index')->with('thongbao','Xóa product thành công!');
    }
}
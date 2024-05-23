<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hoadon;
use App\Models\HoaDonDetail;
use App\Models\PayDetail;

class Hoadoncontoller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hoadon = Hoadon::paginate(5);
        return view('layouts.Admin.hoadon.index',compact('hoadon'))->with('i',(request()->input('page',1) -1) *5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.Admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // Lấy dữ liệu của chi tiết hóa đơn dựa trên ID hóa đơn
        $hoadonDetail = HoaDonDetail::where('order_id', $id)->get(); // Giả sử cột trong chi tiết hóa đơn lưu ID hóa đơn là 'hoadon_id'
        // Trả về view hiển thị dữ liệu chi tiết hóa đơn
        return view('layouts.Admin.hoadon.show', compact('hoadonDetail'));
    }

    public function oke($payment_id)
    {
        $payDetail = PayDetail::where('id', $payment_id)->get(); //ết hóa đơn lưu ID hóa đơn là 'hoadon_id'
        return view('layouts.Admin.hoadon.pay',compact('payDetail'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $hoadon = Hoadon::findOrFail($id);
        $hoadon->status = "Đã xác nhận";
        $hoadon->save();
        return redirect()->back()->with('thongbao','Cập nhập hóa đơn thành công!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(hoadon $hoadon)
    {

          // Delete related details first
        $hoadon->details()->delete();
        // Then delete the related payment
        $payment = PayDetail::find($hoadon->payment_id);
        if ($payment) {
            $payment->delete();
        }
        $hoadon->delete();
        return redirect()->back()->with('thongbao','Xoa hoa don thành công!');
    }
    
}
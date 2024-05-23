<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;

class Cartcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Cart $cart)
    {
        // dd($cart);
        $product = Product::paginate(20);
        $sp_cart = $cart->items;
        // dd($sp_cart);
        return view('cart',compact('product', 'cart'))->with('i',(request()->input('page',1) -1) *5);
        
    }
    public function addToCart($id, Cart $cart)
    {
        $quantity = request('quantity', 1);
        $quantity =  $quantity > 0 ? floor($quantity) :1;
        $product = Product::where('id', $id)->first();

       $cart->add($product, $quantity);
       
       return redirect()->route("user.cart");
    }
    /**
     * Remove the specified resource from storage.
     */
    public function deleteCart($id, Cart $cart)
    {
        $cart->delete($id);
        return redirect()->route('user.cart');
    }
      /**
     * Update the specified resource in storage.
     */
    public function updateCart($id, Cart $cart)
    {
        $quantity = request('quantity', 1);
        $quantity =  $quantity > 0 ? floor($quantity) :1;

        $cart->update($id, $quantity);
        return redirect()->route('user.cart');
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
    public function store(Request $request)
    {
        Product::create($request->all());
        return redirect()->route('product.index')->with('thongbao', 'Thêm sản phẩm thành công!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $product = Product::with(['manufacture', 'category'])->findOrFail($id);
        return view('admin.product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        
        return view('layouts.Admin.edit', compact('product'));
    }

  

    
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Catalog;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::paginate(5);

        return view('index', compact('product'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function search(Request $request)
    {
        $query = $request->input('query');

        $products = Product::where('name', 'like', '%' . $query . '%')
            ->orWhere('title', 'like', '%' . $query . '%')
            ->orWhere('price', 'like', '%' . $query . '%')
            ->get();

        return view('search', compact('products'));
    }
    public function view()
    {
        return view('oneProduct');
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Product::create($request->all());
        return redirect()->route('sinhvien.index')->with('thongbao', 'Thêm sản phẩm thành công!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // Find the product and eager load the catalog relationship
        $product = Product::findOrFail($id);


        // Get the associated catalog
        $catalogId = $product->catalog_id;

        $catalog = Catalog::where("catalog_id", $catalogId)->firstOrFail();

        // Pass both product and catalog data to the view
        return view('oneProduct', ['product' => $product, 'catalog' => $catalog]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, product $product)
    {
        $product->update($request->all());
        return redirect()->route('sinhvien.index')->with('thongbao', 'Cập nhập sinh viên thành công!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(product $product)
    {
        $product->delete();
        return redirect()->route('sinhvien.index')->with('thongbao', 'Xóa sinh viên thành công!');
    }
}

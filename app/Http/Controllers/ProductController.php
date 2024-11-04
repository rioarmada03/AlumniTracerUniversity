<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Requests\StoreProductRequest;

class ProductController extends Controller
{
    public function index(Request $request) {
        $list = Product::with(['relationCategory'])->where('category_id',$request->category_id)->get();
        // Mengambil data product beserta categorynya dimana difilter field category_id berdasarkan requestnya
        return $list;
    }

    public function storeProduct(StoreProductRequest $request)
    {
        Product::create($request->all());

        return redirect('Product')->with('success', 'Product created successfully!');
    }
}

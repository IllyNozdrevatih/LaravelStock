<?php

namespace App\Http\Controllers;

use App\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with(['brand','type','value_characteristics'])->get();


        return view('product.index',compact('products'));
    }

    public function show($id)
    {
        $product = Product::find($id);


        return view('product.show',compact('product'));
    }
}

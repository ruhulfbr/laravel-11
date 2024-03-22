<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return response()->json($products);
    }

    public function create()
    {
        $product = new Product([
            'name' => 'Product 1',
            'price' => 100
        ]);
        $product->save();
        return response()->json($product);
    }
}
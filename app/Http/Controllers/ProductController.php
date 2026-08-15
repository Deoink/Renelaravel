<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StarProductRquest;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('products.index', [
            'products' => $products
        ]);
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(StarProductRquest $request)
    {
        Product::create($request->validated());

        return redirect()->route('products.index');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index');
    }
}
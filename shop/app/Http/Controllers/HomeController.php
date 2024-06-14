<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        // Открытие главной страницы
        $product_list = Product::latest()->take(5)->get();
        return view('welcome', ['product' => $product_list]);
    }
    public function catalog()
    {
        $products = Product::latest()->get();
        return view('catalog', ['products' => $products]);
    }
    public function product($product_id)
    {
        try {
            $product = Product::findorFail($product_id);
            return view('product', ['product' => $product]);
        } catch (ModelNotFoundException $e) {
            abort(404);
        }
    }
}

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
        return view('catalog');
    }
}

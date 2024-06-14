<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Like;
use Auth;

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
            $like = Like::where('user_id', Auth::id())->where('product_id', $product_id)->first();
            return view('product', ['product' => $product, 'like' => $like]);
        } catch (ModelNotFoundException $e) {
            abort(404);
        }
    }
    public function search(Request $request) {
        // Поиск
        $word = $request->word;
        $positions = Product::where('name', 'like', "%{$word}%")->orWhere('description', 'like', "%{$word}%")->orderBy('id')->get();
        return view('search', ['positions' => $positions]);
    }
}

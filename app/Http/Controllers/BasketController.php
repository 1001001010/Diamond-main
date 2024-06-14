<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Basket;
use Auth;

class BasketController extends Controller
{
    public function add_basket($product_id)
    {
        // Добавление в корзину
        $data = [
            'user_id' => Auth::user()->id,
            'product_id' => $product_id,
        ];
        Basket::create($data);
        return redirect()->back();
    }

    public function open_basket()
    {
        // Открытие корзины
        $baskets = Basket::with('products')->where('user_id', Auth::user()->id)->get();  
        $summ = 0; 
        foreach ($baskets as $basket) {
            foreach ($basket->products as $position) {
                $summ += $position->price;
            }
        };
        return view('basket', ['baskets' => $baskets, 'summ' => $summ]);
    }
    public function delete_basket($basket_id)
    {
        Basket::where('id', $basket_id)->delete();
        return redirect()->back();
    }
}

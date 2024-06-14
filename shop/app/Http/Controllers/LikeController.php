<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Like;
use Auth;

class LikeController extends Controller
{
    public function add_liked($product_id)
    {
        // Добавление в избранное
        $status = Like::where('user_id', Auth::user()->id)->where('product_id', $product_id)->first();
        if ($status) {
            Like::where('id', $status->id)->delete();
        }
        else {
            $data = [
                'user_id' => Auth::user()->id,
                'product_id' => $product_id,
            ];
            Like::create($data);
        }
        return redirect()->back();
    }
    public function open_liked()
    {
        //Открытие избранных
        $likes = Like::with('products')->where('user_id', Auth::user()->id)->get();  
        return view('favourites', ['likes' => $likes]);
    }
}

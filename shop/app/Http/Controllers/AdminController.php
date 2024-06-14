<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;   
use App\Models\Product;

class AdminController extends Controller
{

    public function index()
    {
        return view('admin');
    }

    public function new_position(Request $request) 
    {
        // Добавление ноового товара
        $validated = $request->validate([
            'name' => 'required|string',
            'description' => 'required',
            'price' => 'required|integer',
            'photo' => 'required|image|mimes:jpg,png,jpeg,webp|max:2048',
            'volume' => 'required|string',
            'compound' => 'required|string',
            'brand' => 'required|string',
        ]);
    
        // Сохранение фото
        $name = time(). "." . $request->photo->extension();
        $destination = 'public/products';
        $path = $request->photo->storeAs($destination, $name);
        $data = [
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'photo' => 'storage/products/' . $name,
            'volume' => $request->volume,
            'compound' => $request->compound,
            'brand' => $request->brand
        ];
        Product::create($data);

        return redirect()->back();
    }
}

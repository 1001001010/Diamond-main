<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;
use App\Models\Basket;
use App\Models\Purchase;

class ProfileController extends Controller
{
    public function profile()
    // Открытие профиля
    {
        $buy = Purchase::with('products')->where('user_id', Auth::id())->get();
        return view('profile', ['buy' => $buy]);
    }

    public function edit_profile(Request $request)
    // Редактирование профиля
    {
        $user = Auth::user();
    
        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->fathername = $request->fathername;
        $user->number = $request->phone;
        $user->city = $request->city;
        $user->gender = $request->gender;
        $user->birthday = $request->birthday;
        $user->email = $request->email;
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }
    
        $user->save();
    
        return redirect()->back();
    }
    public function buy()
    {
        $user_id = auth()->id();
        $baskets = Basket::where('user_id', $user_id)->get();
    
        foreach ($baskets as $basket) {
            $purchase = new Purchase();
            $purchase->user_id = $basket->user_id;
            $purchase->product_id = $basket->product_id;
            $purchase->save();
    
            $basket->delete();
        }
    
        return redirect()->route('profile');
    }
}

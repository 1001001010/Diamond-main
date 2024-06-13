<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class ProfileController extends Controller
{
    public function profile()
    // Открытие профиля
    {
        return view('profile');
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
}

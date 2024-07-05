<?php

namespace App\Http\Controllers\Frontend;


use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{
    public function showRegisterForm()
    {
        $title = "Register";
        return view('auth.register', compact('title'));
    }

    public function register(Request $request)
{

    $data = [
        'email' => Hash::make($request->email),
        'name' => Hash::make($request->name),
        'password' => Hash::make($request->password)
    ];

    
    User::create($data);

    return redirect('/login')->with('success', 'Registration successful! Please login.');
}
}
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
        'email' => $request->email,
        'name' => $request->name,
        'password' => Hash::make($request->password)
    ];

    
    User::create($data);

    return redirect('/login')->with('success', 'Registration successful! Please login.');
}
}

// class RegisterController extends Controller
// {
//     public function index(){
//         return view("auth.register",['title' => 'Web Top up | Register']);
//     }

    // public function store(Request $request){

    //     //validate the request
    //     $request->validate([
    //         'email' => ['required', 'max:10','min:4', 'string'],
    //         'name' => 'required|email|unique:users',
    //         'password' => ['required', 'min:7', 'confirmed', Password::default()],

    //     ]);

    //     //create new user
    //     $user = User::create([
    //         'email' => $request -> email,
    //         'name' => $request -> name,
    //         'password' => Hash::make($request -> password),
    //     ]);

    //     auth() -> login($user);

    //     return to_route('user.index');
    // }
// }
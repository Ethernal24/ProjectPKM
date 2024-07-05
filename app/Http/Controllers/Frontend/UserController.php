<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(){
        return view("user",['title' => 'Web Top up | Profile']);
    }
    public function uploadImage(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $user = Auth::user();

        if (!$user) {
            return back()->withErrors(['user' => 'User not authenticated']);
        }

        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('images'), $imageName);

        if ($user->image) {
            Storage::delete('public/images/' . $user->image);
            DB::table('users')
                ->where('id', $user->id)
                ->update(['image' => $imageName]);
        } else {
            DB::table('users')
                ->where('id', $user->id)
                ->update(['image' => $imageName]);
        }

        return back()->with('success', 'Image uploaded successfully.');
    }
}
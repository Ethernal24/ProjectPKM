<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){

        $data['title'] = 'Web Top up | Home';
        $data['providers'] = DB::select('select * from m_provider');

        return view("home",$data);
    }
}
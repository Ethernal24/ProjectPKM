<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use illuminat\http\Request;

class ShopPDAMController extends Controller
{
    public function index(){
        return view("shop-pdam",['title' => 'Web Top up | PDAM']);
    }
}
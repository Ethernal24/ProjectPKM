<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use illuminat\http\Request;

class ShopPLNController extends Controller
{
    public function index(){
        return view("shop-pln",['title' => 'Web Top up | PDAM']);
    }
}
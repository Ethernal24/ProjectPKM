<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InvoicePLNController extends Controller
{
    public function index(){
        return view("invoice-pln",['title' => 'Web Top up | Invoice PLN']);
    }
}

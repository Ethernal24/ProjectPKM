<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InvoicePDAMController extends Controller
{
    public function index(){
        return view("invoice-pdam",['title' => 'Web Top up | PDAM']);
    }
}

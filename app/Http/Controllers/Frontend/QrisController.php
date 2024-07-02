<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
 
class QrisController extends Controller
{
    public function lunasin_dong(Request $request){

        $invoice_id = $request->invoice_id;

        DB::update('update t_invoice set invoice_status = 2 where invoice_id = ?', [$invoice_id]);

        // return view();
        echo "SUKSESSS, SILAKAN CEK WEBNYA";
    }
}
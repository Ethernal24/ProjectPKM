<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use illuminate\http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use PhpParser\Node\Expr\FuncCall;

class ShopPDAMController extends Controller
{
    public function index(Request $request)
    {
        $list_no_pdam = db::select('select * from m_cust_pdam');
        $list_tagihan_pdam = db::select('select * from t_tagihan_pdam');
        // $list_no_pdam = DB::select('select * from m_cust_pdam as a, t_tagihan_pdam as b where a.cust_pdam_id = b.cust_pdam_id');

        $data['title'] = 'Web Top up | Detail PLN';
        return view("shop-pdam", $data);
    }

    public function cek_no_pdam(Request $request)
    {
        $angka = 1111;
        $no_meteran_pdam = $request->input('m_cust_pdam');
        Log::info('Checking PLN number: ' . $no_meteran_pdam);

        // Mengambil list_no_pln_id dan memeriksa keberadaannya
        $pdam_data = DB::table('m_cust_pdam')->select('cust_pdam_id')->where('cust_pdam_no', $no_meteran_pdam)->first();

        $exists = !empty($pdam_data); // Cek keberadaan data

        return response()->json(['valid' => $exists, 'cust_pdam_id' => $pdam_data ? $pdam_data->cust_pdam_id : null]);


        // if (!$exists) {
        //     return response()->json(['valid' => $exists, 'cust_pdam_id' => $pdam_data ? $pdam_data->cust_pdam_id : null]);
        // }
    }
    // public function showData($cust_pdam_id)
    // {
    //     $list_no_pdam = DB::select('select * from m_cust_pdam as a, t_tagihan_pdam as b where a.cust_pdam_id = b.cust_pdam_id');
    //     $data[]
    // }
}

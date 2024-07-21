<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use PhpParser\Node\Expr\FuncCall;

class ShopPDAMController extends Controller
{
    public function index(Request $request)
    {
        $nominal_vouchers = DB::select('select * from m_voucher as a left join m_nominal_voucher AS b on a.nominal_voucher_id = b.nominal_voucher_id where a.user_id = ? and a.is_redeemed = ?', [1, 0]);
        $list_no_pdam = DB::select('select * from m_cust_pdam as a, t_tagihan_pdam as b where a.cust_pdam_id = b.cust_pdam_id');

        $data['nominal_vouchers'] = $nominal_vouchers;
        $data['list_no_pdams'] = $list_no_pdam;
        $data['title'] = 'Web Top up | Detail PLN';
        return view("shop-pdam", $data);
    }

    public function cek_no_pdam(Request $request)
    {
        $no_meteran_pdam = $request->input('m_cust_pdam');
        Log::info('Checking PDAM number: ' . $no_meteran_pdam);

        // Mengambil data dari m_cust_pdam dan t_tagihan_pdam berdasarkan cust_pdam_no
        $pdam_data = DB::table('m_cust_pdam as a')
            ->join('t_tagihan_pdam as b', 'a.cust_pdam_id', '=', 'b.cust_pdam_id')
            ->select('a.*', 'b.*')
            ->where('a.cust_pdam_no', $no_meteran_pdam)
            ->first();

        $exists = !empty($pdam_data); // Cek keberadaan data

        return response()->json([
            'valid' => $exists,
            'cust_pdam_id' => $pdam_data ? $pdam_data->cust_pdam_id : null,
            'cust_pdam_no' => $pdam_data ? $pdam_data->cust_pdam_no : null,
            'cust_pdam_alamat' => $pdam_data ? $pdam_data->cust_pdam_alamat : null,
            'cust_pdam_periode' => $pdam_data ? $pdam_data->tagihan_pdam_periode : null,
            'cust_pdam_total' => $pdam_data ? $pdam_data->tagihan_pdam_total : null
        ]);

        // $list_no_pdam = DB::select('select * from m_cust_pdam as a, t_tagihan_pdam as b where a.cust_pdam_id = b.cust_pdam_id');
        // $no_meteran_pdam = $request->input('m_cust_pdam');
        // Log::info('Checking PLN number: ' . $no_meteran_pdam);

        // // Mengambil list_no_pln_id dan memeriksa keberadaannya
        // $pdam_data = DB::table('m_cust_pdam')->select('cust_pdam_id')->where('cust_pdam_no', $no_meteran_pdam)->first();

        // $exists = !empty($pdam_data); // Cek keberadaan data

        // return response()->json(['valid' => $exists, 'cust_pdam_id' => $pdam_data ? $pdam_data->cust_pdam_id : null]);
    }
}

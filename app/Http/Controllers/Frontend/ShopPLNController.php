<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ShopPLNController extends Controller
{
    public function index(Request $request){

        $nominal_plns = DB::select('select * from m_nominal_pln');
        $list_no_pln = DB::select('select * from m_list_no_pln');
        $stok_pln = DB::select('select * from m_token_pln');
        $nominal_vouchers = DB::select('select * from m_voucher as a left join m_nominal_voucher AS b on a.nominal_voucher_id = b.nominal_voucher_id where a.user_id = ? and a.is_redeemed = ?', [1, 0]);
        
        foreach($nominal_plns as $i => $nominal_pln){
            if(collect($stok_pln)->where('nominal_pln_id', $nominal_pln->nominal_pln_id)->where('token_pln_status','=', 0)->count() > 0){
                $nominal_plns[$i]->status_tersedia = 1;
            }else{
                $nominal_plns[$i]->status_tersedia = 0;
            }
        }

        $data['title'] = 'Web Top up | Detail PLN';
        $data['nominal_plns'] = $nominal_plns;
        $data['nominal_vouchers'] = $nominal_vouchers;

        return view("shop-pln",$data);
    }

    public function cek_no_pln(Request $request){
        $no_meteran_pln = $request->input('m_list_no_pln');
        // Log::info('Checking PLN number: ' . $no_meteran_pln);
        $exists = DB::table('m_list_no_pln')->where('no_pln', $no_meteran_pln)->exists();

        return response()->json(['valid' => $exists]);
    }
}
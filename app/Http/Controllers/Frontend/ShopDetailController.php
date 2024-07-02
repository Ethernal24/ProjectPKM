<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShopDetailController extends Controller
{
    public function index(Request $request){

        $provider = DB::select('select * from m_provider where provider_id = ?', [$request->provider_id]);
        if(count($provider) > 0){
            $provider = $provider[0];
        }
       
        $nominal_pulsas = DB::select('select * from m_nominal_pulsa');
        // $nominal_pulsas = DB::select('select * from m_pulsa as a left join m_nominal_pulsa AS b on a.nominal_pulsa_id = b.nominal_pulsa_id where a.provider_id = ? and (a.pulsa_status = 0 OR a.pulsa_status = 1)', [1]);
        // dd($nominal_pulsas);
        $stok_pulsa = DB::select('select * from m_pulsa where provider_id = ?', [$request->provider_id]);
        // $nominal_vouchers = DB::select('select * from m_voucher where user_id = ?', [auth()->user()->id]);
        $nominal_vouchers = DB::select('select * from m_voucher as a left join m_nominal_voucher AS b on a.nominal_voucher_id = b.nominal_voucher_id where a.user_id = ? and a.is_redeemed = ?', [1, 0]);
        $providersss = DB::select('select * from m_provider');
        


        // loop untuk tahu statusnya, jika ada dan statusnya siji, maka bisa dibilang tersedia (ada stok), else ya habis brow
        
        // foreach($nominal_pulsas as $i => $nominal_pulsa){
        //     if(collect($stok_pulsa)->where('nominal_pulsa_id', $nominal_pulsa->nominal_pulsa_id)->where('pulsa_status','=', 1)->count() > 0){
        //         $nominal_pulsas[$i]->status_tersedia = 1;
        //     }else{
        //         $nominal_pulsas[$i]->status_tersedia = 0;
        //     }
        // }
        foreach($nominal_pulsas as $i => $nominal_pulsa){
            if(collect($stok_pulsa)->where('nominal_pulsa_id', $nominal_pulsa->nominal_pulsa_id)->where('pulsa_status','=', 0)->count() > 0){
                $nominal_pulsas[$i]->status_tersedia = 1;
            }else{
                $nominal_pulsas[$i]->status_tersedia = 0;
            }
        }

        // dd($nominal_pulsas);


        $data['title'] = 'Web Top up | Detail';
        $data['providers'] = $provider;
        $data['providerz'] = $providersss;
        $data['nominal_pulsas'] = $nominal_pulsas;
        $data['nominal_vouchers'] = $nominal_vouchers;
       

        return view("shop-detail",$data);
        
    }

    public function index_pln(Request $request){
        
        $data['title'] = 'Web Top up PLN | Detail';

        return view("shop-detail-pln",$data);
    }

    public function index_pdam(Request $request){
        
        $data['title'] = 'Web Top up PDAM | Detail';

        return view("shop-detail-pdam",$data);
    }

    
}
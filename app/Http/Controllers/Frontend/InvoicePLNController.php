<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class InvoicePLNController extends Controller
{
    public function index(){
        $invoices = DB::select('select * from t_invoice');
        $nominal_vouchers = DB::select('select * from m_nominal_voucher');

        $data['title'] = 'Web Top up | Invoice PLN';
        $data['invoices'] = $invoices;
        $data['nominal_vouchers'] = $nominal_vouchers;

        // return view("invoice",['title' => 'Web Top up | invoice']);
        return view("list_invoice",$data);
        
    }

    public function detailPLN(Request $request){
        
        // NOTE : MASIH HANYA HANDLE JOINAN PULSA, BELUM JOINAN PDAM DAN  PLN TOKEN
        
        $invoice = DB::select('
            select 
                a.*,
                d.nominal_disc,
                f.nominal_pln,
                g.no_pln,
                e.token_pln_kode
            from 
                t_invoice as a

                left join t_invoice_detail as b
                    on a.invoice_id = b.invoice_id 
                left join m_voucher as c 
                    on a.voucher_id = c.voucher_id

                left join m_nominal_voucher as d 
                    on c.nominal_voucher_id = d.nominal_voucher_id 
                
                    left join m_token_pln as e 
                    on b.token_pln_id = e.token_pln_id 

                left join m_nominal_pln as f 
                    on e.nominal_pln_id = f.nominal_pln_id
                left join m_list_no_pln as g 
                    on e.list_no_pln_id = g.list_no_pln_id
            where 
                a.invoice_id = ? 
            ', 
            [
                $request->invoice_id
            ]
        );

        
        $data['title'] = 'Web Top up | invoice';
        $data['invoice'] = $invoice[0];

        return view("invoice-pln",$data);
        
    }

    public function submit(Request $request){

        // $provider_id = $request->provider_id;
        $nominal_pln_id = $request->nominal_pln_id;
        $invoice_type = $request->invoice_type;
        $voucher_id = $request->voucher_id;
        $no_pln_ui = $request->no_pln_ui;
        $list_no_pln_id = $request->list_no_pln_id;

        $nominal_pln = DB::select('select * from m_nominal_pln where nominal_pln_id = ?', [$request->nominal_pln_id]);
        if(count($nominal_pln) > 0){

            $voucher = DB::select('select * from m_voucher as a left join m_nominal_voucher AS b on a.nominal_voucher_id = b.nominal_voucher_id where a.voucher_id = ?', [$request->voucher_id]);
            
            $voucher_id = NULL;
            if(count($voucher) > 0){
                $voucher_id = $request->voucher_id;
            }

            // count total
            $invoice_total = $nominal_pln[0]->nominal_pln - $voucher[0]->nominal_disc;

            // insert ke t_invoice
            $to_insert = [
                'voucher_id' => $voucher_id,
                'invoice_no' => Str::random(10),
                'invoice_type' => $request->invoice_type,
                'no_pln_ui' => strval($request->no_pln_ui),
                'invoice_total' => $invoice_total,
            ];
            $invoice_id = DB::table('t_invoice')->insertGetId($to_insert);

            // insert t_invoice_detail
            $m_token_pln = DB::select('select * from m_token_pln where nominal_pln_id = ? limit 1', [$request->nominal_pln_id]);
            $token_pln_id = $m_token_pln[0]->token_pln_id;
            $to_insert = [
                'invoice_id' => $invoice_id,
                'token_pln_id' => $token_pln_id,
            ];
            DB::table('t_invoice_detail')->insert($to_insert);

            // ganti status voucher
            DB::update('UPDATE m_voucher set is_redeemed = ? , redeemed_at = ? where voucher_id = ?' , [1, date("Y-m-d H:i:s"), $request->voucher_id]);
            //tambah no pln
            DB::update('UPDATE m_token_pln set list_no_pln_id = ? where token_pln_id = ?' , [$request->list_no_pln_id, $token_pln_id]);
            //ganti status token pln
            DB::update('UPDATE m_token_pln set token_pln_status = ? , token_buy_at = ? where token_pln_id = ?' , [1, date("Y-m-d H:i:s"), $token_pln_id]);
            
            return redirect()->to('shop/invoice-pln?invoice_id='.$invoice_id);
        }else{
            return redirect()->back()->withErrors(['msg' => 'Harap pilih nominal token PLN dahulu']);
        }
        
    }
}
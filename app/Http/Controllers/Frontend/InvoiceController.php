<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Invoice;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class InvoiceController extends Controller
{
    public function index()
    {
        $invoices = DB::select('select * from t_invoice');
        $nominal_vouchers = DB::select('select * from m_nominal_voucher');

        $data['title'] = 'Web Top up | invoice';
        $data['invoices'] = $invoices;
        $data['nominal_vouchers'] = $nominal_vouchers;

        // return view("invoice",['title' => 'Web Top up | invoice']);
        return view("list_invoice", $data);
    }

    public function detail(Request $request)
    {

        // NOTE : MASIH HANYA HANDLE JOINAN PULSA, BELUM JOINAN PDAM DAN  PLN TOKEN

        $invoice = DB::select(
            '
            select 
                a.*,
                d.nominal_disc,
                f.nominal as nominal_pulsa,
                g.provider_name,
                g.provider_logo
            from 
                t_invoice as a
                left join t_invoice_detail as b
                    on a.invoice_id = b.invoice_id 
                left join m_voucher as c 
                    on a.voucher_id = c.voucher_id

                left join m_nominal_voucher as d 
                    on c.nominal_voucher_id = d.nominal_voucher_id 

                left join m_pulsa as e 
                    on b.pulsa_id = e.pulsa_id 

                left join m_nominal_pulsa as f 
                    on e.nominal_pulsa_id = f.nominal_pulsa_id
                left join m_provider as g 
                    on e.provider_id = g.provider_id
            where 
                a.invoice_id = ? 
            ',
            [
                $request->invoice_id
            ]
        );


        $data['title'] = 'Web Top up | invoice';
        $data['invoice'] = $invoice[0];

        return view("invoice", $data);
    }

    public function submit(Request $request)
    {
        // dd($request->all());
        // NOTE : PULSANYA BELUM DISETTING STATUSNYA BROW

        // $invoices = new Invoice();
        // $invoices->voucher_id = $request->voucher_id;
        // // $invoices -> invoice_type = $request->invoice_type;
        // $invoices->nomor_telp = $request->nomor_telp;
        // $invoices->invoice_total = $request->invoice_total;
        // dd($request->all());
        // // $invoices -> invoice_status = $request->invoice_status;
        // $invoices->save();

        $provider_id = $request->provider_id;
        $nominal_pulsa_id = $request->nominal_pulsa_id;
        $invoice_type = $request->invoice_type;
        $voucher_id = $request->voucher_id;
        $nomor_telp = $request->nomor_telp;



        $nominal_pulsa = DB::select('select * from m_nominal_pulsa where nominal_pulsa_id = ?', [$request->nominal_pulsa_id]);
        if (count($nominal_pulsa) > 0) {
            // $nominal_pulsa = DB::select('select * from m_pulsa as a left join m_nominal_pulsa AS b on a.nominal_pulsa_id = b.nominal_pulsa_id where a.pulsa_id = ?', [$request->pulsa_id]);
            // if(count($nominal_pulsa) > 0){

            $voucher = DB::select('select * from m_voucher as a left join m_nominal_voucher AS b on a.nominal_voucher_id = b.nominal_voucher_id where a.voucher_id = ?', [$request->voucher_id]);

            $voucher_id = NULL;
            if (count($voucher) > 0) {
                $voucher_id = $request->voucher_id;
            }

            // count total
            $invoice_total = $nominal_pulsa[0]->nominal - $voucher[0]->nominal_disc;

            // insert ke t_invoice
            $to_insert = [
                'voucher_id' => $request->voucher_id,
                'invoice_no' => Str::random(10),
                'invoice_type' => $request->invoice_type,
                'nomor_telp' => strval($request->nomor_telp),
                'invoice_total' => $invoice_total,
            ];
            $invoice_id = DB::table('t_invoice')->insertGetId($to_insert);

            // insert t_invoice_detail
            $m_pulsa = DB::select('select * from m_pulsa where nominal_pulsa_id = ? and provider_id = ? limit 1', [$request->nominal_pulsa_id, $request->provider_id]);
            $pulsa_id = $m_pulsa[0]->pulsa_id;
            $to_insert = [
                'invoice_id' => $invoice_id,
                'pulsa_id' => $pulsa_id,
            ];
            DB::table('t_invoice_detail')->insert($to_insert);

            // ganti status voucher
            DB::update('UPDATE m_voucher set is_redeemed = ? , redeemed_at = ? where voucher_id = ?', [1, date("Y-m-d H:i:s"), $request->voucher_id]);
            //ganti status nom pulsa
            DB::update('UPDATE m_pulsa set pulsa_status = ? , pulsa_buy_at = ? where pulsa_id = ?', [1, date("Y-m-d H:i:s"), $pulsa_id]);

            return redirect()->to('shop-detail/invoice?invoice_id=' . $invoice_id);
        } else {
            return redirect()->back()->withErrors(['msg' => 'Harap pilih nominal pulsa dahulu']);
        }
    }
}

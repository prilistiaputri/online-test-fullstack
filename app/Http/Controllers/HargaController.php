<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HargaController extends Controller
{
    public function index()

    {
        return view('kasir');
    }

    public function diskon(Request $request)
    {
        $total = $request->input('total');
        $potongan;
        $diskon = $total * 0.3;
        $total_bayar;
        $ongkir = 5000;
        if ($total >= 40000 && $diskon <=30000) {
            $total;
            $potongan = '30%';
            //$diskon = $total * 0.3;
            $total_bayar = $total - $diskon + $ongkir;
        }elseif ($total >= 40000 && $diskon > 30000) {
            $total_bayar = $total - 30000 + $ongkir; 
        } elseif ($total < 40000) {
            $total_bayar = $total + $ongkir;
        }

     return redirect('/kasir')->with('tampil', 'Anda hanya membayar sebesar ' .$total_bayar);
        
    }
}
//'potongan' .$potongan. 'maka'.$total_bayar.'rupiah'
//'Total belanja anda sebesar'.$total. 'anda mendapat potongan sebesar' .$diskon. 'Anda hanya membayar sebesar' $total_bayar
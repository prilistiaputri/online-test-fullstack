<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KasirController extends Controller
{
    public function index()

    {
        return view('kasir');
    }

    public function diskon(Request $request)
    {
        $total_1 = $request->input('total-mie-ayam');
        $total_2 = $request->input('total-ayam-geprek');
        $total_3 = $request->input('total-es-jeruk');
        $total_4 = $request->input('total-es-teh');
        $total_harga_1 = $total_1 * 15000;
        $total_harga_2 = $total_2 * 17000;
        $total_harga_3 = $total_3 * 5000;
        $total_harga_4 = $total_4 * 4000;
        $total_akhir = $total_harga_1 + $total_harga_2 + $total_harga_3 + $total_harga_4;

        //$potongan;
        $diskon = $total_akhir * 0.3;
        //$total_bayar;
        //$ongkir = 5000;
        if ($total_akhir >= 40000 && $diskon <= 30000) {
            $total_akhir = $total_akhir - $diskon + 5000;
         //   $potongan = '30%';
            //$diskon = $total * 0.3;
          //  $total_bayar = $total - $diskon + $ongkir;
       }elseif ($total_akhir >= 40000 && $diskon > 30000) {
        $total_akhir = $total_akhir - 30000 + 5000; 
        //    $total_bayar = $total - 30000 + $ongkir; 
       } elseif ($total < 40000) {
        $total_akhir = $total_akhir + $ongkir;
        }

     return redirect('/yanuar')->with('tampil', 'SELAMAT! Anda telah mendapatkan diskon spesial, sehingga anda hanya perlu membayar sebesar Rp. ' .$total_akhir);
        
    }
}
//'potongan' .$potongan. 'maka'.$total_bayar.'rupiah'
//'Total belanja anda sebesar'.$total. 'anda mendapat potongan sebesar' .$diskon. 'Anda hanya membayar sebesar' $total_bayar
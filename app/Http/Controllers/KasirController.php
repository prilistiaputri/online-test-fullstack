<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class KasirController extends Controller
{
    


    public function index()

    {
        
        return view('kasir');
    }

    public function promo(Request $request)
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
        $diskon = $total_akhir * 0.3;

        
        if ($total_akhir >= 40000 && $diskon <= 30000) {
            $diskon = $total_akhir * 0.3;
            $total_bayar = $total_akhir - $diskon + 5000;
         //   $potongan = '30%';
            //$diskon = $total * 0.3;
          //  $total_bayar = $total - $diskon + $ongkir;
          
          
         
       }elseif ($total_akhir >= 40000 && $diskon > 30000) {

        $diskon = 30000;
        $total_bayar = $total_akhir - $diskon + 5000; 
        //    $total_bayar = $total - 30000 + $ongkir; 
       } elseif ($total_akhir < 40000) {
        $diskon = 0;
        $total_bayar = $total_akhir + 5000;
        }

        return redirect('/pesanan')->with('tampil', 'Lakukan pembayaran sebesar Rp. ' .$total_bayar. ',00')
        ->with('total-mie-ayam', $total_1)
        ->with('total-ayam-geprek', $total_2)
        ->with('total-es-jeruk', $total_3)
        ->with('total-es-teh', $total_4)
        ->with('total-harga-mie-ayam','Rp. '.$total_harga_1. ',00')
        ->with('total-harga-ayam-geprek','Rp. ' .$total_harga_2. ',00')
        ->with('total-harga-es-jeruk','Rp. ' .$total_harga_3. ',00')
        ->with('total-harga-es-teh','Rp. ' .$total_harga_4. ',00')
        ->with('subtotal-harga','Rp. ' .$total_akhir. ',00')
        ->with('total-diskon','Rp. ' .$diskon. ',00')
        ->with('total-bayar','Rp. ' .$total_bayar. ',00') ;
               
        
        //return redirect('/pesanan')->with('total-mie-ayam', $total_1);
       
           
        }
        public function store(Request $request)  {
            $daftar = $this->validate(request(), [
            'total-mie-ayam',
            'total-ayam-geprek',
            'total-es-jeruk',
            'total-es-teh',
            'id' => 'required'
            ]);
        }    
         
    }
    

//'potongan' .$potongan. 'maka'.$total_bayar.'rupiah'
//'Total belanja anda sebesar'.$total. 'anda mendapat potongan sebesar' .$diskon. 'Anda hanya membayar sebesar' $total_bayar
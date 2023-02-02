<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HargaController extends Controller
{
    public function index()

    {
        return view('detail-pesanan');
    }

    public function diskon(Request $request)
    {
        $harga_mie_ayam = 15000;
        $harga_ayam_geprek = 17000;
        $harga_es_jeruk = 5000;
        $harga_es_teh = 4000;



        $total_1 = $request->input('total-mie-ayam-1');
        $total_2 = $request->input('total-mie-ayam-2');
        $total_3 = $request->input('total-mie-ayam-3');
        $total_4 = $request->input('total-mie-ayam-4');
        $total_mie_ayam = $total_1 + $total_2 + $total_3 + $total_4;
        $total_harga_mie_ayam = $total_mie_ayam * $harga_mie_ayam;

        $total_5 = $request->input('total-ayam-geprek-1');
        $total_6 = $request->input('total-ayam-geprek-2');
        $total_7 = $request->input('total-ayam-geprek-3');
        $total_8 = $request->input('total-ayam-geprek-4');
        $total_ayam_geprek = $total_5 + $total_6 + $total_7 + $total_8;
        $total_harga_ayam_geprek = $total_ayam_geprek * $harga_ayam_geprek;

        $total_9 = $request->input('total-es-jeruk-1');
        $total_10 = $request->input('total-es-jeruk-2');
        $total_11 = $request->input('total-es-jeruk-3');
        $total_12 = $request->input('total-es-jeruk-4');
        $total_es_jeruk = $total_9 + $total_10 + $total_11 + $total_12;
        $total_harga_es_jeruk = $total_es_jeruk * $harga_es_jeruk;

        $total_13 = $request->input('total-es-teh-1');
        $total_14 = $request->input('total-es-teh-2');
        $total_15 = $request->input('total-es-teh-3');
        $total_16 = $request->input('total-es-teh-4');
        $total_es_teh = $total_13 + $total_14 + $total_15 + $total_16;
        $total_harga_es_teh = $total_es_teh * $harga_es_teh;

        $total_harga_all = $total_harga_mie_ayam + $total_harga_ayam_geprek + $total_harga_es_jeruk + $total_harga_es_teh;

        $ongkir = 5000;
        $potongan = 0.3;
        $diskon = $total_harga_all * $potongan;

        $total_harga_customer_1 = ($total_1 *$harga_mie_ayam) + ($total_5*$harga_ayam_geprek) + ($total_9*$harga_es_jeruk) + ($total_13 * $harga_es_teh);
        $total_harga_customer_2 = ($total_2 *$harga_mie_ayam) + ($total_6*$harga_ayam_geprek) + ($total_10*$harga_es_jeruk) + ($total_14 * $harga_es_teh);
        $total_harga_customer_3 = ($total_3 *$harga_mie_ayam) + ($total_7*$harga_ayam_geprek) + ($total_11*$harga_es_jeruk) + ($total_15 * $harga_es_teh);
        $total_harga_customer_4 = ($total_4 *$harga_mie_ayam) + ($total_8*$harga_ayam_geprek) + ($total_12*$harga_es_jeruk) + ($total_16 * $harga_es_teh);
       
        $ongkir_customer = $ongkir/4;


       if ($total_harga_all >= 40000 && $diskon <= 30000) {

           $diskon = $total_harga_all * $potongan;
           $total_bayar = $total_harga_all - $diskon + $ongkir;
           $diskon_customer_1 = $total_harga_customer_1 * $potongan;
           $diskon_customer_2 = $total_harga_customer_2 * $potongan;
           $diskon_customer_3 = $total_harga_customer_3 * $potongan;
           $diskon_customer_4 = $total_harga_customer_4 * $potongan;

           
           $total_bayar_customer_1 = $total_harga_customer_1 - $diskon_customer_1 + $ongkir_customer;
           $total_bayar_customer_2 = $total_harga_customer_2 - $diskon_customer_2 + $ongkir_customer;
           $total_bayar_customer_3 = $total_harga_customer_3 - $diskon_customer_3 + $ongkir_customer;
           $total_bayar_customer_4 = $total_harga_customer_4 - $diskon_customer_4 + $ongkir_customer;

           
                 
         } elseif ($total_harga_all >= 40000 && $diskon > 30000) {
       
       $diskon = 30000;
       $total_bayar = $total_harga_all - $diskon + $ongkir; 
       $diskon_customer_1 = $diskon;
       $diskon_customer_2 = $diskon;
       $diskon_customer_3 = $diskon;
       $diskon_customer_4 = $diskon;
    
       $total_bayar_customer_1 = $total_harga_customer_1 - $diskon_customer_1 + $ongkir_customer;
       $total_bayar_customer_2 = $total_harga_customer_2 - $diskon_customer_2 + $ongkir_customer;
       $total_bayar_customer_3 = $total_harga_customer_3 - $diskon_customer_3 + $ongkir_customer;
       $total_bayar_customer_4 = $total_harga_customer_4 - $diskon_customer_4 + $ongkir_customer;     

      } elseif ($total_harga_all < 40000) {
            $diskon = 0;
            $total_bayar = $total_harga_all + $ongkir;
            $diskon_customer_1 = $diskon;
            $diskon_customer_2 = $diskon;
            $diskon_customer_3 = $diskon;
            $diskon_customer_4 = $diskon;

            $total_bayar_customer_1 = $total_harga_customer_1 - $diskon_customer_1 + $ongkir_customer;
            $total_bayar_customer_2 = $total_harga_customer_2 - $diskon_customer_2 + $ongkir_customer;
            $total_bayar_customer_3 = $total_harga_customer_3 - $diskon_customer_3 + $ongkir_customer;
            $total_bayar_customer_4 = $total_harga_customer_4 - $diskon_customer_4 + $ongkir_customer;

      }

        return redirect('/split-bill')
        ->with('total-harga-customer-1','Rp. '.$total_harga_customer_1. ',00')
        ->with('total-harga-customer-2','Rp. '.$total_harga_customer_2. ',00')
        ->with('total-harga-customer-3','Rp. '.$total_harga_customer_3. ',00')
        ->with('total-harga-customer-4','Rp. '.$total_harga_customer_4. ',00')

        ->with('diskon-customer-1','Rp. '.$diskon_customer_1. ',00')
        ->with('diskon-customer-2','Rp. '.$diskon_customer_2. ',00')
        ->with('diskon-customer-3','Rp. '.$diskon_customer_3. ',00')
        ->with('diskon-customer-4','Rp. '.$diskon_customer_4. ',00')

        ->with('total-bayar-customer-1','Rp. '.$total_bayar_customer_1. ',00')
        ->with('total-bayar-customer-2','Rp. '.$total_bayar_customer_2. ',00')
        ->with('total-bayar-customer-3','Rp. '.$total_bayar_customer_3. ',00')
        ->with('total-bayar-customer-4','Rp. '.$total_bayar_customer_4. ',00')

        ->with('subtotal-harga','Rp. '.$total_harga_all. ',00')
        ->with('total-diskon','Rp. '.$diskon. ',00')
        ->with('total-bayar','Rp. '.$total_bayar. ',00')

        ->with('total-harga-mie-ayam','Rp. '.$total_harga_mie_ayam. ',00')
        ->with('total-harga-ayam-geprek','Rp. '.$total_harga_ayam_geprek. ',00')
        ->with('total-harga-es-jeruk','Rp. '.$total_harga_es_jeruk. ',00')
        ->with('total-harga-es-teh','Rp. '.$total_harga_es_teh. ',00')

        ->with('total-mie-ayam', $total_mie_ayam)
        ->with('total-ayam-geprek', $total_ayam_geprek)
        ->with('total-es-jeruk', $total_es_jeruk)
        ->with('total-es-teh', $total_es_teh)
        
        ->with('total-mie-ayam-1', $total_1)
        ->with('total-mie-ayam-2', $total_2)
        ->with('total-mie-ayam-3', $total_3)
        ->with('total-mie-ayam-4', $total_4)

        ->with('total-ayam-geprek-1', $total_5)
        ->with('total-ayam-geprek-2', $total_6)
        ->with('total-ayam-geprek-3', $total_7)
        ->with('total-ayam-geprek-4', $total_8)

        ->with('total-es-jeruk-1', $total_9)
        ->with('total-es-jeruk-2', $total_10)
        ->with('total-es-jeruk-3', $total_11)
        ->with('total-es-jeruk-4', $total_12)

        ->with('total-es-teh-1', $total_13)
        ->with('total-es-teh-2', $total_14)
        ->with('total-es-teh-3', $total_15)
        ->with('total-es-teh-4', $total_16)
        ;
        
               
        
        //return redirect('/pesanan')->with('total-mie-ayam', $total_1);
       
           
        }
         
    }
    

//'potongan' .$potongan. 'maka'.$total_bayar.'rupiah'
//'Total belanja anda sebesar'.$total. 'anda mendapat potongan sebesar' .$diskon. 'Anda hanya membayar sebesar' $total_bayar
<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KasirController;
use App\Http\Controllers\HargaController;


//Route::get('/', function () {
 //   return view('welcome');
//});



Route::get('/pesanan', function () {
 return view('pesanan');
   });

//Route::get('/detail-pesanan', function () {
    //return view('detail-pesanan');
    // });

      Route::get('/split-bill', function () {
        return view('split-bill');
        });

//Route::get('/kasir', function () {
  // return view('kasir');
//});

Route::get('/kasir', [KasirController::class, 'index']);
Route::post('/promo', [KasirController::class, 'promo']);

Route::get('/detail-pesanan', [HargaController::class, 'index']);
Route::post('/diskon', [HargaController::class, 'diskon']);


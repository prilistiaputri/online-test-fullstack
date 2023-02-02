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

//Route::get('/', function () {
 //   return view('welcome');
//});

Route::get('/1', function () {
return view('pertemuan1');
});

Route::get('/yanuar', function () {
    return view('yanuar');
    });

//Route::get('/kasir', function () {
  // return view('kasir');
//});

Route::get('/kasir', [KasirController::class, 'index']);
Route::post('/diskon', [KasirController::class, 'diskon']);

//Route::get('/kasir', 'App\Http\Controllers\KasirController@index');
//Route::post('/diskon', 'App\Http\Controllers\KasirController@diskon');
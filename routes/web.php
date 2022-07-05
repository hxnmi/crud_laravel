<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PelangganController;

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

Route::get('/', function () {
    return view('login');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
//Route::get('/produk', function () {
  //  return view('produk');
//});
// Route::get('/pelanggan', function () {
   // return view('pelanggan');
//});
Route::resource('produk', ProdukController::class);
Route::resource('pelanggan', PelangganController::class);
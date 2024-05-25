<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\detail_pesananController;
use App\Http\Controllers\distributorController;
use App\Http\Controllers\pelangganController;
use App\Http\Controllers\pengirimanController;
use App\Http\Controllers\pesananController;
use App\Http\Controllers\produkController;
use App\Http\Controllers\salesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::resource('admin', adminController::class);
Route::resource('detail_pesanan', detail_pesananController::class);
Route::resource('distributor', distributorController::class);
Route::resource('pelanggan', pelangganController::class);
Route::resource('pengiriman', pengirimanController::class);
Route::resource('pesanan', pesananController::class);
Route::resource('produk', produkController::class);
Route::resource('sales', salesController::class);

Route::get('/generate-pdf', [produkController::class, 'generatePDF']);

Route::get('/home', function () {
    return view('index');
});


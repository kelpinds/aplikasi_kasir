<?php

use App\Http\Controllers\KasirController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\ProdukController;
use App\Http\Middleware\cek_validation_admin;
use App\Http\Middleware\validation_admin;
use Illuminate\Support\Facades\Route;
//proses login sampai ke dashboard
Route::get('login/', [KasirController::class,'loginKasir']);
Route::post('login/', [KasirController::class,'procces_login']);
Route::get('dashboard/', [KasirController::class,'dashboard']);
Route::get('data_admin/', [KasirController::class, 'data_admin']);
Route::get('logout/', [KasirController::class, 'logout']);
Route::get('registrasi_kasir/', [KasirController::class, 'registrasi_kasir']);
Route::post('registration/', [KasirController::class,'registration']);
Route::get('login_pembelian/', [PelangganController::class, 'login_pembelian']);
Route::post('login_user/', [PelangganController::class,'procces_login_user']);
Route::get('dashboard_user/', [PelangganController::class, 'dashboard_user']);
Route::post('penjualan/', [ProdukController::class,'registration_transaction']);
Route::get('laporan/', [ProdukController::class, 'laporan']);
Route::get('laporan_penjualan/', [ProdukController::class, 'laporan_penjualan']);
Route::get('data_barang/', [PenjualanController::class, 'data_barang']);
Route::get('data/', [PenjualanController::class, 'data']);
Route::post('penjualan_admin/', [PenjualanController::class,'registration_transaction_admin']);

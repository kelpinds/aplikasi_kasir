<?php

namespace App\Http\Controllers;

use App\Models\penjualan;
use App\Models\produk;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    //
    public function data_barang()
    {
        return view('databarang');
    }
    public function data()
    {
        $m = new produk();
        return view('databarang', ['laporan_penjualan' => $m->all()]);
    }
    public function registration_transaction_admin(Request $request)
    {
        $V = new produk();

        $V->create([
            'produk_id' => $request->produk_id,
            'nama_produk' => $request->nama_produk,
            'harga' => $request->harga,
            'stok' => $request->stok
        ]);

        return redirect('registrasi_kasir/');
    }
}

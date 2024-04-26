<?php

namespace App\Http\Controllers;

use App\Models\produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    //
    public function laporan()
    {
        return view('laporan');
    }
    public function laporan_penjualan()
    {
        $m = new produk();
        return view('laporan', ['laporan_penjualan' => $m->all()]);
    }
    public function registration_transaction(Request $request)
    {
        $V = new produk();

        $V->create([
            'produk_id' => $request->produk_id,
            'nama_produk' => $request->nama_produk,
            'harga' => $request->harga,
            'stok' => $request->stok
        ]);

        return redirect('dashboard_user/');
    }
}

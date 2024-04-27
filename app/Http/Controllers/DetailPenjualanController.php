<?php

namespace App\Http\Controllers;

use App\Models\detail_penjualan;
use Illuminate\Http\Request;

class DetailPenjualanController extends Controller
{
    //
    public function stok()
    {
        return view('stok');
    }
    public function stokk(Request $request)
    {
        $V = new detail_penjualan();

        $V->create([
            'detail_id' => $request->detail_id,
            'penjualan_id' => $request->penjualan_id,
            'produk_id' => $request->produk_id,
            'jumlah_produk' => $request->jumlah_produk,
            'subtotal' => $request->subtotal
        ]);

        return redirect('stok/');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    //
    public function login_pembelian()
    {
        return view('login_pembelian');
    }

    public function dashboard_user()
    {
        return view('dashboard_user');
    }

    public function procces_login_user(Request $request)
    {

        $p = new pelanggan();

        $p = $p->where('nama_pelanggan', $request->input('nama_pelanggan'));

        if ($p->exists()) {

            session([

                'nama_pelanggan' => $request->input('nama_pelanggan')
            ]);

            return redirect('dashboard_user/');

        }
    }
}

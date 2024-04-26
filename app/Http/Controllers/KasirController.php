<?php

namespace App\Http\Controllers;

use App\Models\kasir;
use Illuminate\Http\Request;

class KasirController extends Controller
{
    //

    public function loginKasir()
    {
        return view('login');
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function logout()
    {
        session()->flush();
        return redirect('login/');
    }

    public function data_admin()
    {
        $m = new kasir();
        return view('dashboard', ['data_admin' => $m->all()]);
    }

    public function registrasi_kasir()
    {
        return view('registrasi_kasir');
    }

    public function registration(Request $request)
    {
        $V = new kasir();

        $V->create([
            'id_kasir' => $request->id_kasir,
            'nama' => $request->username,
            'alamat' => $request->password,
            'telepon' => $request->telepon,
            'username' => $request->username,
            'password' => $request->password,
            'akses' => $request->akses
        ]);

        return redirect('registrasi_kasir/');
    }

    public function procces_login(Request $request)
    {

        $p = new kasir();

        $p = $p->where('username', $request->input('username'))->where('password', $request->input('password'));

        if ($p->exists()) {

            session([

                'username' => $request->input('username'),

                'password' => $request->input('password'),
            ]);

            return redirect('data_admin/');

        }
    }
}

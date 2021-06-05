<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KelasController extends Controller
{
    public function index()
    {
        $kelas = DB::table('kelas')->paginate(100);

        return view('0135kelas', ['kelas' => $kelas]);
    }

    public function cari(Request $request)
    {
        $cari = $request->cari;
        $pegawai = DB::table('pegawai')
            ->where('pegawai_nama', 'like', "%" . $cari . "%")
            ->paginate();
        return view('0135pencarian', ['pegawai' => $pegawai]);
    }
}

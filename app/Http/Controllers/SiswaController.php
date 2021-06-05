<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SiswaController extends Controller
{
    public function index()
    {
        $siswa = DB::table('siswa')->paginate(100);

        return view('0135siswa', ['siswa' => $siswa]);
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

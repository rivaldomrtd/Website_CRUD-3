<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class GuruController extends Controller
{
    public function index()
    {
        $guru = DB::table('guru')->paginate(100);

        return view('0135guru', ['guru' => $guru]);
    }

    public function cari(Request $request)
    {
        $cari = $request->cari;
        $guru = DB::table('s_ganjil3')
            ->where('nama', 'like', "%" . $cari . "%")
            ->paginate();
        return view('0135guru', ['s_ganjil3' => $guru]);
    }
    public function destroy($id)
    {
        $guru = \App\Models\Guru::findOrFail($id);
        $guru->delete();
        return redirect()->route('guru.index');
    }

    public function edit($id)
    {
        $guru_edit = \App\Models\Guru::findOrFail($id);
        return view('editguru', ['guru' => $guru_edit]);
    }

    public function update(Request $request, $id)
    {
        $guru = \App\Models\Guru::findOrFail($id);
        $guru->nama = $request->get('nama');
        $guru->mengajar = $request->get('mengajar');
        $guru->save();
        return redirect()->route('guru.index', [$id]);
    }
}

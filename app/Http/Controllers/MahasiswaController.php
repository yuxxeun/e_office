<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Mahasiswa;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

/**
 * Summary of MahasiswaController
 */
class MahasiswaController extends Controller
{
    public function daftar_mahasiswa()
    {
        $mahasiswa = Mahasiswa::all();
        return view('daftar_mahasiswa')->with('mahasiswa', $mahasiswa);
    }

    public function store(Request $request)
    {
        //dd($request->all());
        $mahasiswa = new Mahasiswa;
        $mahasiswa->nim = $request->nim;
        $mahasiswa->nama = $request->nama;
        $mahasiswa->prodi = $request->prodi;
        $mahasiswa->j_kel = $request->j_kel;
        $mahasiswa->save();
        return redirect('daftar_mahasiswa');
    }

    public function show($id)
    {
        return view('daftar_mahasiswa-detail', [
            'mahasiswa' => Mahasiswa::findOrFail($id),
        ]);
    }

    public function edit(Request $request)
    {
        return view('daftar_mahasiswa-edit');
    }
}

<?php

namespace App\Http\Controllers;
use App\Models\SuketMahasiswaAktif;

class SuratController extends Controller
{
    public function index()
    {
        $datas = SuketMahasiswaAktif::join('suket_tunjangan', 'suket_tunjangan.id', '=', 'suket_mahasiswa_aktif.id')->get();
        return view('daftar_surat.daftar_surat', compact('datas'));
    }

    public function create()
    {
        return view('surat.buat_naskah');
    }
}

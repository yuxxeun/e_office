<?php

namespace App\Http\Controllers;

class NaskahController extends Controller
{
    public function naskah()
    {
        return view('naskah.buat_naskah');
    }

    public function suket_mhs_aktif()
    {
        return view('naskah.suket_mhs_aktif');
    }

    public function suket_tunjangan()
    {
        return view('naskah.suket_tunjangan');
    }

    public function surat_izin_kkn()
    {
        return view('naskah.surat_izin_kkn');
    }

    public function surat_izin_magang()
    {
        return view('naskah.surat_izin_magang');
    }

    public function surat_izin_penelitian()
    {
        return view('naskah.surat_izin_penelitian');
    }

    public function surat_izin_observasi_matkul()
    {
        return view('naskah.surat_izin_observasi_matkul');
    }

    public function surat_izin_observasi_TA()
    {
        return view('naskah.surat_izin_observasi_TA');
    }
}

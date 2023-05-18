<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class CreateNaskahController extends Controller
{
    function buat_naskah()
    {
        return view("buat_naskah");
    }

    function riwayat()
    {
        return view("riwayat");
    }

    function suket_mhs_aktif()
    {
        return view("suket_mhs_aktif");
    }

    function suket_tunjangan()
    {
        return view("suket_tunjangan");
    }

    function surat_izin_kkn()
    {
        return view("surat_izin_kkn");
    }

    function surat_izin_magang()
    {
        return view("surat_izin_magang");
    }

    function surat_izin_penelitian()
    {
        return view("surat_izin_penelitian");
    }

    function surat_izin_observasi_matkul()
    {
        return view("surat_izin_observasi_matkul");
    }

    function surat_izin_observasi_TA()
    {
        return view("surat_izin_observasi_TA");
    }
}

<?php

namespace App\Http\Controllers;

class SuratController extends Controller
{
    public function index()
    {
        return view('daftar_surat.daftar_surat');
    }

    public function create()
    {
        return view('surat.buat_naskah');
    }
}

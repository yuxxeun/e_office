<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

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

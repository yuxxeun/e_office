<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DaftarSuratController extends Controller
{
    public function index()
    {
        return view('daftar_surat.daftar_surat');
    }
}

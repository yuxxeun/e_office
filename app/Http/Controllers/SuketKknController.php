<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\SuketKkn;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SuketKknController extends Controller
{
    public function create()
    {
        $kodesurat = 'Surat/IzinKKN/'; 
        $tanggalsurat = Carbon::now()->format('d-m-Y');
        $number = $kodesurat . mt_rand(1000000, 9999999) . '/' . $tanggalsurat;
        $mahasiswas = Mahasiswa::get();
        return view('surat.surat_izin_kkn', ['number' => $number, 'mahasiswas' => $mahasiswas]);
    }

    public function store(Request $request)
    {
        $suketKkn = new SuketKkn();
        $suketKkn->nomor_surat = $request->nomor_surat;
        $suketKkn->tanggal_surat = $request->tanggal_surat;
        $suketKkn->nama_pimpinan_instansi = $request->nama_pimpinan_instansi;
        $suketKkn->nama_instansi = $request->nama_instansi;
        $suketKkn->alamat_instansi = $request->alamat_instansi;
        $suketKkn->nama_mahasiswa = $request->nama_mahasiswa;
        $suketKkn->nim = $request->nim;
        $suketKkn->prodi = $request->prodi;
        $suketKkn->waktu = $request->waktu;

        $suketKkn->save();
        return redirect()->route('surat.index');
    }
}

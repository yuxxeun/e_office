<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\SuketMagangPkl;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SuketMagangPklController extends Controller
{
    public function create()
    {
        $kodesurat = 'Surat/SuketIzinMagang/'; 
        $tanggalsurat = Carbon::now()->format('d-m-Y');
        $number = $kodesurat . mt_rand(1000000, 9999999) . '/' . $tanggalsurat;
        $mahasiswas = Mahasiswa::get();
        return view('surat.surat_izin_magang', ['number' => $number, 'mahasiswas' => $mahasiswas]);
    }

    public function store(Request $request)
    {
        $suketMagang = new SuketMagangPkl();
        $suketMagang->nomor_surat = $request->nomor_surat;
        $suketMagang->tanggal_surat = $request->tanggal_surat;
        $suketMagang->nama_pimpinan_instansi = $request->nama_pimpinan_instansi;
        $suketMagang->nama_instansi = $request->nama_instansi;
        $suketMagang->alamat_instansi = $request->alamat_instansi;
        $suketMagang->nama_mahasiswa = $request->nama_mahasiswa;
        $suketMagang->nim = $request->nim;
        $suketMagang->prodi = $request->prodi;
        $suketMagang->waktu = $request->waktu;

        $suketMagang->save();
        return redirect()->route('surat.index');
    }
}

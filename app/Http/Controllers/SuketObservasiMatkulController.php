<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\SuketObservasiMatkul;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SuketObservasiMatkulController extends Controller
{
    public function create()
    {
        $kodesurat = 'Surat/SuketObservasiMatkul/'; 
        $tanggalsurat = Carbon::now()->format('d-m-Y');;
        $number = $kodesurat . mt_rand(1000000, 9999999) . '/' . $tanggalsurat;
        $mahasiswas = Mahasiswa::get();
        return view('surat.surat_izin_observasi_matkul', ['number' => $number, 'mahasiswas' => $mahasiswas]);
    }

    public function store(Request $request)
    {
        $suketObservasi = new SuketObservasiMatkul();
        $suketObservasi->nomor_surat = $request->nomor_surat;
        $suketObservasi->tanggal_surat = $request->tanggal_surat;
        $suketObservasi->nama_pimpinan_instansi = $request->nama_pimpinan_instansi;
        $suketObservasi->nama_instansi = $request->nama_instansi;
        $suketObservasi->alamat_instansi = $request->alamat_instansi;
        $suketObservasi->dokumen = $request->dokumen;
        $suketObservasi->nama_mahasiswa = $request->nama_mahasiswa;
        $suketObservasi->nim = $request->nim;
        $suketObservasi->prodi = $request->prodi;
        $suketObservasi->lokasi_observasi = $request->lokasi_observasi;
        $suketObservasi->waktu = $request->waktu;
        $suketObservasi->mata_kuliah = $request->mata_kuliah;
        $suketObservasi->contact_person = $request->contact_person;

        $suketObservasi->save();
        return redirect()->route('surat.index');
    }
}

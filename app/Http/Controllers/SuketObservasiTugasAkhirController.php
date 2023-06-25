<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\SuketObservasiTugasAkhir;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SuketObservasiTugasAkhirController extends Controller
{
    public function create()
    {
        $kodesurat = 'Surat/SuketObservasiTugasAkhir/'; 
        $tanggalsurat = Carbon::now()->format('d-m-Y');;
        $number = $kodesurat . mt_rand(1000000, 9999999) . '/' . $tanggalsurat;
        $mahasiswas = Mahasiswa::get();
        return view('surat.surat_izin_observasi_TA', ['number' => $number, 'mahasiswas' => $mahasiswas]);
    }

    public function store(Request $request)
    {
        $suketObservasiTA = new SuketObservasiTugasAkhir();
        $suketObservasiTA->nomor_surat = $request->nomor_surat;
        $suketObservasiTA->tanggal_surat = $request->tanggal_surat;
        $suketObservasiTA->nama_pimpinan_instansi = $request->nama_pimpinan_instansi;
        $suketObservasiTA->nama_instansi = $request->nama_instansi;
        $suketObservasiTA->alamat_instansi = $request->alamat_instansi;
        $suketObservasiTA->dokumen = $request->dokumen;
        $suketObservasiTA->nama_mahasiswa = $request->nama_mahasiswa;
        $suketObservasiTA->nim = $request->nim;
        $suketObservasiTA->prodi = $request->prodi;
        $suketObservasiTA->lokasi_observasi = $request->lokasi_observasi;
        $suketObservasiTA->waktu = $request->waktu;
        $suketObservasiTA->mata_kuliah = $request->mata_kuliah;
        $suketObservasiTA->contact_person = $request->contact_person;

        $suketObservasiTA->save();
        return redirect()->route('surat.index');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\SuketPenelitianTugasAkhir;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SuketPenelitianTugasAkhirController extends Controller
{
    public function create()
    {
        $kodesurat = 'Surat/SuketPenelitianTugasAkhir/'; 
        $tanggalsurat = Carbon::now()->format('d-m-Y');;
        $number = $kodesurat . mt_rand(1000000, 9999999) . '/' . $tanggalsurat;
        $mahasiswas = Mahasiswa::get();
        return view('surat.surat_izin_observasi_TA', ['number' => $number, 'mahasiswas' => $mahasiswas]);
    }

    public function store(Request $request)
    {
        $suketPenelitian = new SuketPenelitianTugasAkhir();
        $suketPenelitian->nomor_surat = $request->nomor_surat;
        $suketPenelitian->tanggal_surat = $request->tanggal_surat;
        $suketPenelitian->nama_pimpinan_instansi = $request->nama_pimpinan_instansi;
        $suketPenelitian->nama_instansi = $request->nama_instansi;
        $suketPenelitian->alamat_instansi = $request->alamat_instansi;
        $suketPenelitian->dokumen = $request->dokumen;
        $suketPenelitian->nama_mahasiswa = $request->nama_mahasiswa;
        $suketPenelitian->nim = $request->nim;
        $suketPenelitian->prodi = $request->prodi;
        $suketPenelitian->lokasi_observasi = $request->lokasi_observasi;
        $suketPenelitian->waktu = $request->waktu;
        $suketPenelitian->judul_tugas_akhir = $request->judul_tugas_akhir;
        $suketPenelitian->contact_person = $request->contact_person;

        $suketPenelitian->save();
        return redirect()->route('surat.index');
    }
}

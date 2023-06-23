<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\SuketMahasiswaAktif;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SuketMahasiswaAktifController extends Controller
{
    public function create()
    {
        $kodesurat = 'Surat/MhsAktif/'; 
        $tanggalsurat = Carbon::now()->format('d-m-Y');
        $number = $kodesurat . mt_rand(1000000, 9999999) . '/' . $tanggalsurat;
        $mahasiswas = Mahasiswa::get();
        return view('surat.suketMahasiswaAktif', ['number' => $number, 'mahasiswas' => $mahasiswas]);
    }

    public function store(Request $request)
    {
        $suketMahasiswaAktif = new SuketMahasiswaAktif;
        $suketMahasiswaAktif->nomor_surat = $request->nomor_surat;
        $suketMahasiswaAktif->tanggal_surat = $request->tanggal_surat;
        $suketMahasiswaAktif->nama_mahasiswa = $request->nama_mahasiswa;
        $suketMahasiswaAktif->nim = $request->nim;
        $suketMahasiswaAktif->prodi = $request->prodi;
        $suketMahasiswaAktif->semester = $request->semester;
        $suketMahasiswaAktif->contact_person = $request->contact_person;
        $suketMahasiswaAktif->alamat = $request->alamat;
        $suketMahasiswaAktif->keperluan = $request->keperluan;

        $suketMahasiswaAktif->save();
        return redirect()->route('surat.index');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\SuketTunjangan;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SuketTunjanganController extends Controller
{
    public function create()
    {
        $kodesurat = 'Surat/SuketTunjangan/'; 
        $tanggalsurat = Carbon::now()->format('d-m-Y');;
        $number = $kodesurat . mt_rand(1000000, 9999999) . '/' . $tanggalsurat;
        $mahasiswas = Mahasiswa::get();
        return view('surat.suket_tunjangan', ['number' => $number, 'mahasiswas' => $mahasiswas]);
    }

    public function store(Request $request)
    {
        $suketTunjangan = new SuketTunjangan;
        $suketTunjangan->nomor_surat = $request->nomor_surat;
        $suketTunjangan->tanggal_surat = $request->tanggal_surat;
        $suketTunjangan->nama_mahasiswa = $request->nama_mahasiswa;
        $suketTunjangan->nim = $request->nim;
        $suketTunjangan->prodi = $request->prodi;
        $suketTunjangan->semester = $request->semester;
        $suketTunjangan->contact_person = $request->contact_person;
        $suketTunjangan->alamat = $request->alamat;
        $suketTunjangan->keperluan = $request->keperluan;
        $suketTunjangan->nama_ortu = $request->nama_ortu;
        $suketTunjangan->nip = $request->nip;
        $suketTunjangan->pangkat_golongan = $request->pangkat_golongan;
        $suketTunjangan->jabatan = $request->jabatan;
        $suketTunjangan->instansi = $request->instansi;

        $suketTunjangan->save();
        return redirect()->route('surat.index');
    }
}

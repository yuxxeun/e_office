<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Mahasiswa;
use RealRashid\SweetAlert\Facades\Alert as Alert;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        return view('mahasiswa.daftar_mahasiswa')->with('mahasiswa', $mahasiswa);
    }

    public function create()
    {
        return view('mahasiswa.tambah_daftar_mahasiswa');
    }

    public function store(Request $request)
    {
        $mahasiswa = new Mahasiswa;
        $mahasiswa->nim = $request->nim;
        $mahasiswa->nama = $request->nama;
        $mahasiswa->prodi = $request->prodi;
        $mahasiswa->j_kel = $request->j_kel;
        $mahasiswa->save();
        return redirect()->route('mahasiswa.index');
    }

    public function show($id)
    {
        return view('mahasiswa.daftar_mahasiswa-detail', [
            'mahasiswa' => Mahasiswa::findOrFail($id),
        ]);
    }

    public function edit($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        return view('mahasiswa.edit_daftar_mahasiswa', compact('mahasiswa'));
    }

    public function update(Request $request, $id)
    {
        $mahasiswa = Mahasiswa::find($id);

        $mahasiswa->update([
            'nim' => $request->get('nim'),
            'nama' => $request->get('nama'),
            'j_kel' => $request->get('j_kel'),
        ]);

        Alert::success('Berhasil 🎉🥳', 'Berhasil mengubah data mahasiswa');
        return redirect()->route('mahasiswa.index');
    }

    public function destroy($id)
    {
        $mahasiswa = Mahasiswa::findOrfail($id);
        $mahasiswa->delete();
        
        Alert::success('Berhasil 🎉🥳', 'Berhasil menghapus data mahasiswa');
        return redirect()->route('mahasiswa.index');
    }
}

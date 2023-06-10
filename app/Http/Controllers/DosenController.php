<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert as Alert;

class DosenController extends Controller
{
    public function index(Request $request)
    {
        if ($request->keyword) {
            $dosens = Dosen::search($request->keyword)->paginate(10);
        } else {
            $dosens = Dosen::paginate(10);
        }
        return view('dosen.index', compact('dosens'));
    }

    public function create()
    {
        return view('dosen.create');
    }

    public function store(Request $request)
    {
        $mahasiswa = new Dosen;
        $mahasiswa->nip = $request->nim;
        $mahasiswa->nama_dosen = $request->nama_dosen;
        $mahasiswa->jabatan = $request->jabatan;
        $mahasiswa->save();

        return redirect()->route('dosen.index');
    }

    public function show($id)
    {
        return view('dosen.show', [
            'dosen' => Dosen::findOrFail($id),
        ]);
    }

    public function edit($id)
    {
        $dosen = Dosen::findOrFail($id);

        return view('dosen.edit', compact('dosen'));
    }

    public function update(Request $request, $id)
    {
        $mahasiswa = Dosen::find($id);

        $mahasiswa->update([
            'nip' => $request->get('nip'),
            'nama_dosen' => $request->get('nama_dosen'),
            'jabatan' => $request->get('jabatan'),
        ]);

        Alert::success('Berhasil 🎉🥳', 'Berhasil mengubah data dosen');
        return redirect()->route('dosen.index');
    }

    public function destroy($id)
    {
        $dosen = Dosen::findOrfail($id);
        $dosen->delete();

        Alert::success('Berhasil 🎉🥳', 'Berhasil menghapus data dosen');
        return redirect()->route('dosen.index');
    }
}

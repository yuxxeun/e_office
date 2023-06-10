<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Prodi;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert as Alert;

class ProdiController extends Controller
{
    public function index(Request $request)
    {
        if ($request->keyword) {
            $prodis = Prodi::search($request->keyword)->paginate(10);
        } else {
            $prodis = Prodi::paginate(10);
        }
        return view('prodi.index', compact('prodis'));
    }

    public function create()
    {
        $dosens = Dosen::get();
        return view('prodi.create', compact('dosens'));
    }

    public function store(Request $request)
    {
        $prodi = new Prodi;
        $prodi->nama_prodi = $request->nama_prodi;
        $prodi->id_dosen = $request->id_dosen;
        $prodi->save();

        return redirect()->route('prodi.index');
    }

    public function show(string $id)
    {
        $prodi = Prodi::findOrFail($id);
        $dosens = Dosen::get();
        return view('prodi.edit', compact('prodi', 'dosens'));
    }

    public function edit(string $id)
    {
        $prodi = Prodi::findOrfail($id);
        $dosens = Dosen::get();

        return view('prodi.edit', compact('prodi', 'dosens'));
    }

    public function update(Request $request, string $id)
    {
        $prodi = Prodi::find($id);
        $prodi->update([
            'nama_prodi' => $request->get('nama_prodi'),
            'id_dosen' => $request->get('id_dosen'),
        ]);

        Alert::success('Berhasil 🎉🥳', 'Berhasil mengubah data prodi');
        return redirect()->route('prodi.index');
    }

    public function destroy(string $id)
    {
        $prodi = Prodi::findOrfail($id);
        $prodi->delete();
        
        Alert::success('Berhasil 🎉🥳', 'Berhasil menghapus data prodi');
        return redirect()->route('prodi.index');
    }
}

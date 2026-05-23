<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karya;

class KaryaController extends Controller
{
    public function index()
    {
        $data_karya = Karya::all();
        return view('projects', compact('data_karya'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|min:3',
            'deskripsi' => 'required'
        ]);

        Karya::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi
        ]);

        return redirect('/projects')->with('sukses', 'Data berhasil ditambah!');
    }

    public function edit($id)
    {
        $karya = Karya::find($id);
        return view('edit', compact('karya'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|min:3',
            'deskripsi' => 'required'
        ]);

        $karya = Karya::find($id);

        $karya->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi
        ]);

        return redirect('/projects')->with('sukses', 'Data berhasil diubah!');
    }

    public function destroy($id)
    {
        $karya = Karya::find($id);
        $karya->delete();

        return redirect('/projects')->with('sukses', 'Data berhasil dihapus!');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Makanan;
use Illuminate\Http\Request;

class MakananController extends Controller
{
    public function index()
    {
        $makanan = Makanan::all();
        return view('admin.makanan.index', compact('makanan'));
    }

    public function create()
    {
        return view('admin.makanan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'foto' => 'nullable|image',
        ]);

        $fotoPath = $request->file('foto') ? $request->file('foto')->store('public/foto_makanan') : null;

        Makanan::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'foto' => $fotoPath,
        ]);

        return redirect()->route('makanan.index');
    }

    public function edit($id)
    {
        $makanan = Makanan::findOrFail($id);
        return view('admin.makanan.edit', compact('makanan'));
    }

    public function update(Request $request, $id)
    {
        $makanan = Makanan::findOrFail($id);
        
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'foto' => 'nullable|image',
        ]);

        $fotoPath = $request->file('foto') ? $request->file('foto')->store('public/foto_makanan') : $makanan->foto;

        $makanan->update([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'foto' => $fotoPath,
        ]);

        return redirect()->route('makanan.index');
    }

    public function destroy($id)
    {
        $makanan = Makanan::findOrFail($id);
        $makanan->delete();

        return redirect()->route('makanan.index');
    }
}


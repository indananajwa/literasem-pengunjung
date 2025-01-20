<?php

namespace App\Http\Controllers;

use App\Models\arsitektur;
use Illuminate\Http\Request;

class ArsitekturController extends Controller
{
    public function index()
    {
        $arsitektur = Arsitektur::all();
        return view('admin.arsitektur.index', compact('arsitektur'));
    }

    public function create()
    {
        return view('admin.arsitektur.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'foto' => 'nullable|image',
        ]);

        $fotoPath = $request->file('foto') ? $request->file('foto')->store('public/foto_arsitektur') : null;

        Arsitektur::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'foto' => $fotoPath,
        ]);

        return redirect()->route('arsitektur.index');
    }

    public function edit($id)
    {
        $arsitektur = Arsitektur::findOrFail($id);
        return view('admin.arsitektur.edit', compact('arsitektur'));
    }

    public function update(Request $request, $id)
    {
        $arsitektur = Arsitektur::findOrFail($id);
        
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'foto' => 'nullable|image',
        ]);

        $fotoPath = $request->file('foto') ? $request->file('foto')->store('public/foto_arsitektur') : $arsitektur->foto;

        $arsitektur->update([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'foto' => $fotoPath,
        ]);

        return redirect()->route('arsitektur.index');
    }

    public function destroy($id)
    {
        $arsitektur = Arsitektur::findOrFail($id);
        $arsitektur->delete();

        return redirect()->route('arsitektur.index');
    }
}


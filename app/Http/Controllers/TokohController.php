<?php

namespace App\Http\Controllers;

use App\Models\Tokoh;
use Illuminate\Http\Request;

class TokohController extends Controller
{
    public function index()
    {
        $tokoh = Tokoh::all();
        return view('admin.tokoh.index', compact('tokoh'));
    }

    public function create()
    {
        return view('admin.tokoh.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'foto' => 'nullable|image',
        ]);

        $fotoPath = $request->file('foto') ? $request->file('foto')->store('public/foto_tokoh') : null;

        Tokoh::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'foto' => $fotoPath,
        ]);

        return redirect()->route('tokoh.index');
    }

    public function edit($id)
    {
        $tokoh = Tokoh::findOrFail($id);
        return view('admin.tokoh.edit', compact('tokoh'));
    }

    public function update(Request $request, $id)
    {
        $tokoh = Tokoh::findOrFail($id);
        
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'foto' => 'nullable|image',
        ]);

        $fotoPath = $request->file('foto') ? $request->file('foto')->store('public/foto_tokoh') : $tokoh->foto;

        $tokoh->update([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'foto' => $fotoPath,
        ]);

        return redirect()->route('tokoh.index');
    }

    public function destroy($id)
    {
        $tokoh = Tokoh::findOrFail($id);
        $tokoh->delete();

        return redirect()->route('tokoh.index');
    }
}

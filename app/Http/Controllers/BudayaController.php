<?php

namespace App\Http\Controllers;

use App\Models\Budaya;
use Illuminate\Http\Request;

class BudayaController extends Controller
{
    public function index()
    {
        $budaya = Budaya::all();
        return view('admin.budaya.index', compact('budaya'));
    }

    public function create()
    {
        return view('admin.budaya.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'foto' => 'nullable|image',
            'video' => 'nullable|url', // Optional video
        ]);

        $fotoPath = $request->file('foto') ? $request->file('foto')->store('public/foto_budaya') : null;

        Budaya::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'foto' => $fotoPath,
            'video' => $request->video,
        ]);

        return redirect()->route('budaya.index');
    }

    public function edit($id)
    {
        $budaya = Budaya::findOrFail($id);
        return view('admin.budaya.edit', compact('budaya'));
    }

    public function update(Request $request, $id)
    {
        $budaya = Budaya::findOrFail($id);

        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'foto' => 'nullable|image',
            'video' => 'nullable|url', // Optional video
        ]);

        $fotoPath = $request->file('foto') ? $request->file('foto')->store('public/foto_budaya') : $budaya->foto;

        $budaya->update([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'foto' => $fotoPath,
            'video' => $request->video,
        ]);

        return redirect()->route('budaya.index');
    }

    public function destroy($id)
    {
        $budaya = Budaya::findOrFail($id);
        $budaya->delete();

        return redirect()->route('budaya.index');
    }
}


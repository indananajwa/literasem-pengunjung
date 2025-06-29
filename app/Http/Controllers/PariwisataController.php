<?php

namespace App\Http\Controllers;

use App\Models\Pariwisata;
use Illuminate\Http\Request;

class PariwisataController extends Controller
{
    /**
     * Halaman publik: daftar destinasi wisata
     */
    public function index()
    {
        $data = Pariwisata::all();
        $highlight = Pariwisata::limit(5)->get();
        return view('pengunjung.pariwisata', compact('data', 'highlight'));
    }
    

    /**
     * Menampilkan gambar dari database (BLOB)
     */
    public function gambar($id)
    {
        $item = Pariwisata::findOrFail($id);

        if (!$item->foto) {
            abort(404);
        }

        return response($item->foto)
            ->header('Content-Type', $item->mime_type);
    }
}

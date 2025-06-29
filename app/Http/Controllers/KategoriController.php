<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class KategoriController extends Controller
{
    /**
     * Menampilkan halaman kategori berdasarkan kode kategori
     */
    
    public function show($kodeKategori)
    {
        try {
            $kategori = DB::table('kategori')
                ->where('kode_kategori', strtoupper($kodeKategori))
                ->first();

            Log::info('KategoriController Debug', [
                'kode_kategori_input' => $kodeKategori,
                'kode_kategori_upper' => strtoupper($kodeKategori),
                'kategori_found' => $kategori ? true : false,
            ]);

        } catch (\Exception $e) {
            Log::error('Database Error in KategoriController: ' . $e->getMessage());
            abort(500, 'Database connection error');
        }

        if (!$kategori) {
            abort(404, 'Kategori tidak ditemukan');
        }

        $kontenList = DB::table('konten')
            ->where('kode_kategori', strtoupper($kodeKategori))
            ->orderBy('kode_konten')
            ->get();

        Log::info('Konten Data Debug', [
            'kategori_code' => $kategori->kode_kategori,
            'konten_count' => $kontenList->count(),
        ]);

        // Fix: Ensure fieldRules is always an array
        $fieldRules = [];
        if (!empty($kategori->field_rules)) {
            $decodedRules = json_decode($kategori->field_rules, true);
            if (json_last_error() === JSON_ERROR_NONE && is_array($decodedRules)) {
                $fieldRules = $decodedRules;
            }
        }

        // Buat array yang akan dikirim ke JavaScript
        $tourData = $kontenList->map(function ($item) {
            return [
                'id' => $item->kode_konten,
                'name' => $item->judul,
                'images' => $item->gambar ? [route('konten.image', $item->kode_konten)] : [],
                'video' => $item->video_url,
                'description' => $item->deskripsi
            ];
        });

        // FIX: Create safe versions for JavaScript without breaking existing template
        $kategoriForJS = [
            'kode_kategori' => $kategori->kode_kategori,
            'nama_kategori' => $kategori->nama_kategori,
            'judul_kategori' => $kategori->judul_kategori,
            'deskripsi_kategori' => $kategori->deskripsi_kategori,
            'field_rules' => $kategori->field_rules,
        ];

        $tourDataForJS = $tourData->toArray();

        return view('pengunjung.kategori.page1', compact('kategori', 'kontenList', 'fieldRules', 'tourData', 'kategoriForJS', 'tourDataForJS'));
    }

    /**
     * Menampilkan gambar kategori cover
     */
    public function showCoverImage($kodeKategori)
    {
        $kategori = DB::table('kategori')
            ->where('kode_kategori', strtoupper($kodeKategori))
            ->first();
            
        if (!$kategori || !$kategori->gambar_cover) {
            abort(404);
        }
        
        return response($kategori->gambar_cover)
            ->header('Content-Type', $kategori->mime_type ?? 'image/jpeg');
    }
    
    /**
     * Menampilkan gambar konten
     */
    public function showKontenImage($kodeKonten)
    {
        $konten = DB::table('konten')
            ->where('kode_konten', $kodeKonten)
            ->first();
            
        if (!$konten || !$konten->gambar) {
            abort(404);
        }
        
        return response($konten->gambar)
            ->header('Content-Type', $konten->mime_type ?? 'image/jpeg');
    }
    
    /**
     * API untuk search konten dalam kategori
     */
    public function searchKonten(Request $request, $kodeKategori)
    {
        $query = $request->get('q', '');
        
        $kontenList = DB::table('konten')
            ->where('kode_kategori', strtoupper($kodeKategori))
            ->where(function($q) use ($query) {
                $q->where('judul', 'LIKE', "%{$query}%")
                  ->orWhere('deskripsi', 'LIKE', "%{$query}%");
            })
            ->orderBy('kode_konten')
            ->get();
            
        return response()->json($kontenList);
    }
}
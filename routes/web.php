<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\ArsitekturController;
use App\Http\Controllers\MakananController;
use App\Http\Controllers\IbadahController;
use App\Http\Controllers\TokohController;
use App\Http\Controllers\KotaLamaController;
use App\Http\Controllers\BudayaController;

//baru
use App\Http\Controllers\PemerintahController;
use App\Http\Controllers\PariwisataController;
use App\Http\Controllers\PengunjungController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\FeedbackController;


// Route::resource('pemerintah', PemerintahController::class);
// Route::resource('arsitektur', ArsitekturController::class);
// Route::resource('ibadah', IbadahController::class);
// Route::resource('makanan', MakananController::class);
// Route::resource('tokoh', TokohController::class);
// Route::resource('kotalama', KotaLamaController::class);
// Route::resource('budaya', BudayaController::class);
// Route::resource('pariwisata', PariwisataController::class);

// Route::get('/', function () {
//     return view('cover');
// })->name('cover');

// Route::get('/situs-kota-lama', function () {
//     return view('situs-kota-lama');
// })->name('situs-kota-lama');

// Route::get('/makan', function () {
//     return view('eat');
// })->name('makan');

// Route::get('/situskotalama', function () {
//     return view('skl');
// })->name('situskotalama');

// Route::get('/wisata', function () {
//     return view('pariwisata');
// })->name('wisata');

// Route::get('/arsitektur', function () {
//     return view('arsitektur');
// });

// Route::get('/tokoh', function () {
//     return view('tokohM');
// });

// Route::get('/tempatibadah', function () {
//     return view('tempatibadah');
// });

// Route::get('/budaya', function () {
//     return view('budaya');
// });

// Route::get('/maam', action: function () {
//     return view('maam');
// });

// // Route::get('/coba', action: function () {
// //     return view('cobacoba');
// // });


// baru
//landing page
Route::get('/', [PengunjungController::class, 'index'])->name('home');
Route::get('/pemerintahan', [PengunjungController::class, 'pemerintahan'])->name('pemerintahan');
Route::get('/masa-ke-masa', [PengunjungController::class, 'masaKeMasa'])->name('masa-ke-masa');
Route::get('/situs-kota-lama', [PengunjungController::class, 'situsKotaLama'])->name('situs-kota-lama');

//halaman perkategori

// Route untuk menampilkan halaman kategori
Route::get('/kategori/{kodeKategori}', [KategoriController::class, 'show'])
    ->name('kategori.show')
    ->where('kodeKategori', '[A-Z]{3}');

// Route untuk menampilkan gambar cover kategori
Route::get('/kategori/{kodeKategori}/cover', [KategoriController::class, 'showCoverImage'])
    ->name('kategori.cover')
    ->where('kodeKategori', '[A-Z]{3}');

// Route untuk menampilkan gambar konten
Route::get('/konten/{kodeKonten}/image', [KategoriController::class, 'showKontenImage'])
    ->name('konten.image')
    ->where('kodeKonten', '[A-Z]{3}[0-9]{3}');

// Route API untuk search
Route::get('/api/kategori/{kodeKategori}/search', [KategoriController::class, 'searchKonten'])
    ->name('kategori.search')
    ->where('kodeKategori', '[A-Z]{3}');



// Halaman utama pariwisata (pengunjung)
Route::get('/wisata', [PariwisataController::class, 'index'])->name('pariwisata.index');
// Menampilkan gambar dari BLOB
Route::get('/wisata/gambar/{id}', [PariwisataController::class, 'gambar'])->name('pariwisata.gambar');

// bookmark
Route::get('/bookmark', function () {
    return view('pengunjung.bookmark');
})->name('bookmark');

// feedback
Route::post('/feedback', [FeedbackController::class, 'store'])->name('feedback.store');
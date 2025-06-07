<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\PemerintahController;
use App\Http\Controllers\ArsitekturController;
use App\Http\Controllers\MakananController;
use App\Http\Controllers\IbadahController;
use App\Http\Controllers\TokohController;
use App\Http\Controllers\KotaLamaController;
use App\Http\Controllers\BudayaController;
use App\Http\Controllers\PariwisataController;

Route::resource('pemerintah', PemerintahController::class);
Route::resource('arsitektur', ArsitekturController::class);
Route::resource('ibadah', IbadahController::class);
Route::resource('makanan', MakananController::class);
Route::resource('tokoh', TokohController::class);
Route::resource('kotalama', KotaLamaController::class);
Route::resource('budaya', BudayaController::class);
Route::resource('pariwisata', PariwisataController::class);

Route::get('/', function () {
    return view('cover');
})->name('cover');

Route::get('/situs-kota-lama', function () {
    return view('situs-kota-lama');
})->name('situs-kota-lama');

Route::get('/makan', function () {
    return view('eat');
})->name('makan');

Route::get('/situskotalama', function () {
    return view('skl');
})->name('situskotalama');

Route::get('/wisata', function () {
    return view('pariwisata');
})->name('wisata');

Route::get('/arsitektur', function () {
    return view('arsitektur');
});

Route::get('/tokoh', function () {
    return view('tokohM');
});

Route::get('/tempatibadah', function () {
    return view('tempatibadah');
});

Route::get('/budaya', function () {
    return view('budaya');
});

Route::get('/maam', action: function () {
    return view('maam');
});

Route::get('/coba', action: function () {
    return view('cobacoba');
});


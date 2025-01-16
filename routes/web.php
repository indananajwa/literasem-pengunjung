<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('sejarah');
});

Route::get('/cv', function () {
    return view('cover');
});

Route::get('/situs-kota-lama', function () {
    return view('situs-kota-lama');
})->name('situs-kota-lama');

Route::get('/maam', function () {
    return view('eat');
})->name('maam');

Route::get('/situskotalama', function () {
    return view('skl');
})->name('situskotalama');

Route::get('/wisata', function () {
    return view('pariwisata');
})->name('wisata');

Route::get('/wisatasmg', function () {
    return view('wisata');
})->name('wisatasmg');

Route::get('/wisata2', function () {
    return view('wisata2');
})->name('wisata2');

Route::get('/budaya', function () {
    return view('bud');
})->name('budaya');

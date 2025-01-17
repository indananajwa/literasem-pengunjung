<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('cover');
});

Route::get('/situs-kota-lama', function () {
    return view('situs-kota-lama');
})->name('situs-kota-lama');

Route::get('/makan', function () {
    return view('eat');
})->name('makan');

Route::get('/situskotalama', function () {
    return view('skl');
})->name('situskotalama');

Route::get('/wisatasmg', function () {
    return view('wisata');
})->name('wisatasmg');

Route::get('/pemerintahan', function () {
    return view('pemerintahan');
});

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

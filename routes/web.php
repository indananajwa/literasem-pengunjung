<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('sejarah');
});

Route::get('/pemerintahan', function () {
    return view('pemerintahan');
});

Route::get('/arsitektur', function () {
    return view('arsitektur');
});

Route::get('/tokohM', function () {
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

Route::get('/cinese', action: function () {
    return view('cinese');
});
<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Kategori;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Share categories to header view
        View::composer('pengunjung.layouts.header', function ($view) {
            $kategoris = Kategori::select('kode_kategori', 'judul_kategori')
                ->orderBy('judul_kategori')
                ->get();
            $view->with('kategoris', $kategoris);
        });
    }
}
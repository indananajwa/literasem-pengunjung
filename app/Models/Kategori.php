<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'kategori';
    protected $primaryKey = 'kode_kategori';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'kode_kategori',
        'nama_kategori',
        'judul_kategori',
        'deskripsi_kategori',
        'gambar_cover',
        'mime_type',
        'field_rules',
    ];

    protected $casts = [
        'field_rules' => 'array', 
        'gambar_cover' => 'binary',
    ];
}
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pariwisata', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 64);
            $table->text('deskripsi');
            $table->binary('foto')->nullable();                 // sementara pakai binary()
            $table->string('mime_type', 50)->nullable();        // untuk Content-Type
            $table->string('url_maps', 255)->nullable();        // link Google Maps
            $table->decimal('lat', 10, 7)->nullable();          // koordinat peta
            $table->decimal('lng', 10, 7)->nullable();
            $table->timestamps();
        });

        // Override tipe foto menjadi MEDIUMBLOB
        DB::statement("ALTER TABLE pariwisata MODIFY foto MEDIUMBLOB;");
    }

    public function down(): void
    {
        Schema::dropIfExists('pariwisata');
    }
};

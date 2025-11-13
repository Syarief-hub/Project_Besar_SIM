<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Jalankan migration.
     */
    public function up(): void
    {
        Schema::create('penduduk', function (Blueprint $table) {
            $table->id(); // kolom id otomatis (primary key)
            $table->string('nik', 20)->unique(); // Nomor Induk Kependudukan
            $table->string('nama', 100);
            $table->string('tempat_lahir', 50);
            $table->date('tanggal_lahir');
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->string('agama', 30);
            $table->text('alamat');
            $table->timestamps(); // kolom created_at & updated_at
        });
    }

    /**
     * Hapus tabel jika di-rollback.
     */
    public function down(): void
    {
        Schema::dropIfExists('penduduk');
    }
};
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('suket_penelitian_tugas_akhir', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_surat');
            $table->date('tanggal_surat');
            $table->string('nama_pimpinan_instansi');
            $table->string('nama_instansi');
            $table->string('alamat_instansi');
            $table->string('dokumen');
            $table->string('nama_mahasiswa');
            $table->string('nim');
            $table->string('prodi');
            $table->string('lokasi_observasi');
            $table->date('waktu');
            $table->string('judul_tugas_akhir');
            $table->string('contact_person');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('suket_penelitian_tugas_akhir');
    }
};

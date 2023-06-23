<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('suket_mahasiswa_aktif', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_surat');
            $table->string('tanggal_surat');
            $table->string('nama_mahasiswa');
            $table->string('nim');
            $table->string('prodi');
            $table->integer('semester');
            $table->string('contact_person');
            $table->text('alamat');
            $table->text('keperluan');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('suket_mahasiswa_aktif');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('suket_tunjangan', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_surat')->unique();
            $table->date('tanggal_surat');
            $table->string('nama_mahasiswa');
            $table->string('nim');
            $table->string('prodi');
            $table->integer('semester');
            $table->string('contact_person');
            $table->text('alamat');
            $table->text('keperluan');
            $table->string('nama_ortu');
            $table->string('nip');
            $table->string('pangkat_golongan');
            $table->string('jabatan');
            $table->string('instansi');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('suket_tunjangan');
    }
};

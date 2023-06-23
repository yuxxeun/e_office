<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuketMahasiswaAktif extends Model
{
    use HasFactory;

    protected $table = 'suket_mahasiswa_aktif';
    protected $primaryKey = 'id';
    protected $guard = [];
}

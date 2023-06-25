<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuketObservasiTugasAkhir extends Model
{
    use HasFactory;
    protected $table = 'suket_observasi_tugas_akhir';
    protected $primaryKey = 'id';
    protected $guard = [];
}

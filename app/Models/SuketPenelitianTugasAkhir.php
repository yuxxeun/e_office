<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuketPenelitianTugasAkhir extends Model
{
    use HasFactory;
    protected $table = 'suket_penelitian_tugas_akhir';
    protected $primaryKey = 'id';
    protected $guard = [];
}

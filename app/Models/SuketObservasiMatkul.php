<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuketObservasiMatkul extends Model
{
    use HasFactory;
    protected $table = 'suket_observasi_matkul';
    protected $primaryKey = 'id';
    protected $guard = [];
}

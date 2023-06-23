<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuketMagangPkl extends Model
{
    use HasFactory;
    protected $table = 'suket_magang_pkl';
    protected $primaryKey = 'id';
    protected $guard = [];
}

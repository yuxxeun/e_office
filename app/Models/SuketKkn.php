<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuketKkn extends Model
{
    use HasFactory;
    protected $table = 'suket_kkn';
    protected $primaryKey = 'id';
    protected $guard = [];
}

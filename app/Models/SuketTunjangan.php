<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuketTunjangan extends Model
{
    use HasFactory;
    protected $table = 'suket_tunjangan';
    protected $primaryKey = 'id';
    protected $guarded = [];
}

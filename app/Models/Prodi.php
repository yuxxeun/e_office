<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Prodi extends Model
{
    use HasFactory;
    use Searchable;

    protected $table = 'prodi';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function dosen()
    {
        return $this->belongsTo(Dosen::class, 'id_dosen');
    }

    public function toSearchableArray(): array
    {
        return [
            'nama_prodi' => $this->nama_prodi,
        ];
    }
}

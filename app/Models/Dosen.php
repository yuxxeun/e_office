<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Dosen extends Model
{
    use HasFactory;
    use Searchable;

    protected $table = 'dosens';
    protected $primaryKey = 'nip';
    protected $guarded = [];

    public function prodi()
    {
        return $this->hasMany(Product::class);
    }


    public function toSearchableArray(): array
    {
        return [
            'nip' => $this->nip,
            'nama_dosen' => $this->nama_dosen,
        ];
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Mahasiswa extends Model
{
    use HasFactory;
    use Searchable;

    protected $table = 'mahasiswa';
    protected $primaryKey = 'nim';
    protected $guarded = [];

    public function toSearchableArray(): array
    {
        return [
            'nama' => $this->nama,
            'nim' => $this->nim,
        ];
    }
}

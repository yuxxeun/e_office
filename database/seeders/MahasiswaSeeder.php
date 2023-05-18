<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('mahasiswa')->insert([
            'nim' => '19051397041',
            'nama' => 'Dyahayu Retno Wulan',
            'prodi' => 'D4 Manajemen Informatika',
            'j_kel' => 'Perempuan'
        ]);
    }
}

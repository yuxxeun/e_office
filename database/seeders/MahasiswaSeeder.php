<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    public function run()
    {
        DB::table('mahasiswa')->insert([
            'nim' => '19051397041',
            'nama' => 'Dyahayu Retno Wulan',
            'prodi' => 'D4 Manajemen Informatika',
            'j_kel' => 'Perempuan',
            'created_at' => Carbon::now()->format('Y-m-d h:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d h:i:s'),
        ]);
    }
}

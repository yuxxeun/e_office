<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdiSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('prodi')->insert(
            [
                'nama_prodi' => 'D4 Teknik Listrik',
                'id_dosen' => 21346587,
                'created_at' => Carbon::now()->format('Y-m-d h:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d h:i:s'),
            ],
            [
                'nama_prodi' => 'D4 Teknik Sipil',
                'id_dosen' => 21346587,
                'created_at' => Carbon::now()->format('Y-m-d h:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d h:i:s'),
            ],
            [
                'nama_prodi' => 'D4 Tata Busana',
                'id_dosen' => 21346587,
                'created_at' => Carbon::now()->format('Y-m-d h:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d h:i:s'),
            ],
            [
                'nama_prodi' => 'D4 Manajemen Informatika',
                'id_dosen' => 21346587,
                'created_at' => Carbon::now()->format('Y-m-d h:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d h:i:s'),
            ],
            [
                'nama_prodi' => 'D4 Transportasi',
                'id_dosen' => 21346587,
                'created_at' => Carbon::now()->format('Y-m-d h:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d h:i:s'),
            ],
            [
                'nama_prodi' => 'D4 Teknik Listrik',
                'id_dosen' => 21346587,
                'created_at' => Carbon::now()->format('Y-m-d h:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d h:i:s'),
            ]
    );
    }
}

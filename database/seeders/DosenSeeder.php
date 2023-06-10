<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DosenSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('dosens')->insert(
            [
                'nip' => '21346587',
                'nama_dosen' => 'Krido Pambudi Bowo Leksono',
                'jabatan' => 'Dosen Pembimbing',
                'created_at' => Carbon::now()->format('Y-m-d h:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d h:i:s'),
            ],
            [
                'nip' => '0987654321',
                'nama_dosen' => 'Dini Tri Hapsari',
                'jabatan' => 'Dosen Ilmu Kejuruan',
                'created_at' => Carbon::now()->format('Y-m-d h:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d h:i:s'),
            ],
            [
                'nip' => '77665544332',
                'nama_dosen' => 'Yekti Prasetyaningsih',
                'jabatan' => 'Kaprodi Teknik Mesin',
                'created_at' => Carbon::now()->format('Y-m-d h:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d h:i:s'),
            ]
        );
    }
}

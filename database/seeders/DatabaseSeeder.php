<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call(UsersTableSeeders::class);
        $this->call(MahasiswaSeeder::class);
        $this->call(DosenSeeder::class);
        $this->call(ProdiSeeder::class);
        \App\Models\Mahasiswa::factory(10)->create();
    }
}

<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class MahasiswaFactory extends Factory
{
    public function definition(): array
    {
        $j_kel = $this->faker->randomElement(['laki-laki', 'perempuan']);
        $prodi = $this->faker->randomElement(['Rekayasa perangkat Lunak', 'Kedokteran', 'Teknik Mesin', 'Teknik Sipil']);

        return [
            'nim' => $this->faker->numberBetween(10000),
            'nama' => $this->faker->name($j_kel),
            'prodi' => $prodi,
            'j_kel' => $j_kel,
            'created_at' => Carbon::now()->format('Y-m-d h:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d h:i:s'),
        ];
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReptilSeeder extends Seeder
{
    public function run()
    {
        DB::table('reptils')->insert([
            [
                'type' => 'Ular',
                'species' => 'Python reticulatus',
                'size' => '2 Meter',
                'price' => 300000,
                'description' => 'Ular sanca kembang berukuran besar dan sehat, cocok untuk reptil enthusiast.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'type' => 'Kadal',
                'species' => 'Iguana',
                'size' => '130 cm',
                'price' => 400000,
                'description' => 'Iguana hijau yang ramah dan sehat, cocok untuk peliharaan.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'type' => 'Kura-kura',
                'species' => 'Diamond Back Terapin',
                'size' => '25 cm',
                'price' => 700000,
                'description' => 'Kura-kura air dengan tempurung berwarna biru yang eksotis, sehat dan aktif.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

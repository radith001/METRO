<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Memanggil seeder untuk tabel reptils
        $this->call([
            ReptilSeeder::class,
        ]);

        // Cek jika admin sudah ada, jika belum buat data admin
        $admin = User::firstOrCreate(
            ['email' => 'admin@admin.com'],
            [
                'name' => 'Admin',
                'password' => bcrypt('password'), // Atur password admin sesuai kebutuhan
            ]
        );

        // Jika sistem menggunakan roles, berikan peran admin
        $admin->assignRole('super_admin');
    }
}

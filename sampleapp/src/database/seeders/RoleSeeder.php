<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Buat peran (roles)
        $adminRole = Role::create(['name' => 'admin']);
        $buyerRole = Role::create(['name' => 'pembeli']);

        // Buat hak akses (permissions)
        $permissions = [
            'view catalog', // Hak akses untuk melihat katalog
            'manage reptiles', // Hak akses untuk mengelola reptil
            'manage orders' // Hak akses untuk mengelola pesanan
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        // Berikan semua hak akses ke admin
        $adminRole->givePermissionTo(Permission::all());

        // Berikan hak akses hanya untuk melihat katalog ke pembeli
        $buyerRole->givePermissionTo('view catalog');
    }
}

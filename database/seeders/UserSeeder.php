<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Super Admin
        $superAdmin = User::firstOrCreate(
            ['email' => 'superadmin@example.com'],
            [
                'name' => 'Super Admin',
                'password' => Hash::make('password'),
            ]
        );
        $superAdmin->syncRoles(['admin']);

        // 2. Admin
        $admin = User::firstOrCreate(
            ['email' => 'admin@example.com'],
            [
                'name' => 'Admin',
                'password' => Hash::make('password'),
            ]
        );
        $admin->syncRoles(['admin']);

        // 3. Pegawai (editor)
        $pegawai = User::firstOrCreate(
            ['email' => 'pegawai@example.com'],
            [
                'name' => 'Pegawai',
                'password' => Hash::make('password'),
            ]
        );
        $pegawai->syncRoles(['editor']);

        // 4. Viewer 1
        $viewer1 = User::firstOrCreate(
            ['email' => 'viewer1@example.com'],
            [
                'name' => 'Viewer One',
                'password' => Hash::make('password'),
            ]
        );
        $viewer1->syncRoles(['viewer']);

        // 5. Viewer 2
        $viewer2 = User::firstOrCreate(
            ['email' => 'viewer2@example.com'],
            [
                'name' => 'Viewer Two',
                'password' => Hash::make('password'),
            ]
        );
        $viewer2->syncRoles(['viewer']);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Buat role jika belum ada
        $adminRole = Role::firstOrCreate(['name' => 'admin']);
        $bidanRole = Role::firstOrCreate(['name' => 'bidan']);
        $kaderRole = Role::firstOrCreate(['name' => 'kader']);

        // Buat user admin
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password123'),
        ]);
        $admin->roles()->attach($adminRole);

        // Buat user bidan
        $bidan = User::create([
            'name' => 'Bidan',
            'email' => 'bidan@gmail.com',
            'password' => Hash::make('password123'),
        ]);
        $bidan->roles()->attach($bidanRole);

        // Buat user kader
        $kader = User::create([
            'name' => 'Kader',
            'email' => 'kader@gmail.com',
            'password' => Hash::make('password123'),
        ]);
        $kader->roles()->attach($kaderRole);
    }
}

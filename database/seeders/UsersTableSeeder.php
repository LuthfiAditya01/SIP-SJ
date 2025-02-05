<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin User',
                'email' => 'admin@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
                'role' => 'Admin',
                'is_verified' => true,
                'lingkungan' => '1',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Bidan User',
                'email' => 'bidan@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
                'role' => 'Bidan',
                'is_verified' => true,
                'lingkungan' => '2',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Kader User',
                'email' => 'kader@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
                'role' => 'Kader',
                'is_verified' => true,
                'lingkungan' => '3',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}

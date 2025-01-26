<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BalitaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('data_balita')->insert([[
            'nama_balita' => 'Aisyah',
            'nama_ortu' => 'Indah',
            'tanggal_lahir' => '2024-09-1',
            'jenis_kelamin' => 'P',
            'lingkungan' => '1',
            'is_stunting' => 'Stunting'
        ],[
            'nama_balita' => 'Doni',
            'nama_ortu' => 'Sutarman',
            'tanggal_lahir' => '2024-08-7',
            'jenis_kelamin' => 'L',
            'lingkungan' => '3',
            'is_stunting' => 'Perlu Diverifikasi'
        ],[
            'nama_balita' => 'Aulia',
            'nama_ortu' => 'Indah',
            'tanggal_lahir' => '2024-12-7',
            'jenis_kelamin' => 'P',
            'lingkungan' => '4',
            'is_stunting' => 'Sehat'
        ],[
            'nama_balita' => 'Mutiara',
            'nama_ortu' => 'Putri',
            'tanggal_lahir' => '2024-07-9',
            'jenis_kelamin' => 'P',
            'lingkungan' => '5',
            'is_stunting' => 'Sehat'
        ],[
            'nama_balita' => 'Raka',
            'nama_ortu' => 'Bagus',
            'tanggal_lahir' => '2024-10-15',
            'jenis_kelamin' => 'L',
            'lingkungan' => '2',
            'is_stunting' => 'Stunting'
        ],[
            'nama_balita' => 'Nadia',
            'nama_ortu' => 'Siska',
            'tanggal_lahir' => '2024-11-22',
            'jenis_kelamin' => 'P',
            'lingkungan' => '4',
            'is_stunting' => 'Perlu Perhatian'
        ],[
            'nama_balita' => 'Arif',
            'nama_ortu' => 'Rudi',
            'tanggal_lahir' => '2024-06-30',
            'jenis_kelamin' => 'L',
            'lingkungan' => '1',
            'is_stunting' => 'Sehat'
        ],[
            'nama_balita' => 'Salsabila',
            'nama_ortu' => 'Dewi',
            'tanggal_lahir' => '2024-05-12',
            'jenis_kelamin' => 'P',
            'lingkungan' => '3',
            'is_stunting' => 'Stunting'
        ],[
            'nama_balita' => 'Farhan',
            'nama_ortu' => 'Dian',
            'tanggal_lahir' => '2024-03-18',
            'jenis_kelamin' => 'L',
            'lingkungan' => '5',
            'is_stunting' => 'Sehat'
        ],[
            'nama_balita' => 'Rina',
            'nama_ortu' => 'Eka',
            'tanggal_lahir' => '2024-02-05',
            'jenis_kelamin' => 'P',
            'lingkungan' => '2',
            'is_stunting' => 'Perlu Diverifikasi'
        ],[
            'nama_balita' => 'Yudha',
            'nama_ortu' => 'Hendra',
            'tanggal_lahir' => '2024-04-10',
            'jenis_kelamin' => 'L',
            'lingkungan' => '4',
            'is_stunting' => 'Sehat'
        ],[
            'nama_balita' => 'Laras',
            'nama_ortu' => 'Rina',
            'tanggal_lahir' => '2024-09-25',
            'jenis_kelamin' => 'P',
            'lingkungan' => '1',
            'is_stunting' => 'Stunting'
        ]
        // ,[
        //     'nama_balita' => 'Bayu',
        //     'nama_ortu' => 'Joko',
        //     'tanggal_lahir' => '2024-08-01',
        //     'jenis_kelamin' => 'L',
        //     'lingkungan' => '3',
        //     'is_stunting' => 'Perlu Diverifikasi'
        // ],[
        //     'nama_balita' => 'Alifa',
        //     'nama_ortu' => 'Aisyah',
        //     'tanggal_lahir' => '2024-01-14',
        //     'jenis_kelamin' => 'P',
        //     'lingkungan' => '5',
        //     'is_stunting' => 'Sehat'
        // ]
    ]);
    }
}

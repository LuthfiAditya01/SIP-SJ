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
        DB::table('data_balita')->insert([
            [
                'nik_balita' => '3174010100010001',
                'nik_ortu' => '3174010200010001',
                'nama_balita' => 'Aisyah',
                'nama_ortu' => 'Indah',
                'tanggal_lahir' => '2024-09-01',
                'lingkungan' => '1',
                'jenis_kelamin' => 'P',
                'is_stunting' => 'Stunting',
                'alamat' => 'Jl. Melati No. 1',
                'have_kia' => 'Ya',
                'created_at' => now(),
                'updated_at' => now()
            ],[
                'nik_balita' => '3174010100010002',
                'nik_ortu' => '3174010200010002',
                'nama_balita' => 'Doni',
                'nama_ortu' => 'Sutarman',
                'tanggal_lahir' => '2024-08-07',
                'lingkungan' => '3',
                'jenis_kelamin' => 'L',
                'is_stunting' => 'Perlu Diverifikasi',
                'alamat' => 'Jl. Kenanga No. 2',
                'have_kia' => 'Tidak',
                'created_at' => now(),
                'updated_at' => now()
            ],[
                'nik_balita' => '3174010100010003',
                'nik_ortu' => '3174010200010003',
                'nama_balita' => 'Aulia',
                'nama_ortu' => 'Indah',
                'tanggal_lahir' => '2024-12-07',
                'lingkungan' => '4',
                'jenis_kelamin' => 'P',
                'is_stunting' => 'Sehat',
                'alamat' => 'Jl. Mawar No. 3',
                'have_kia' => 'Ya',
                'created_at' => now(),
                'updated_at' => now()
            ],[
                'nik_balita' => '3174010100010004',
                'nik_ortu' => '3174010200010004',
                'nama_balita' => 'Mutiara',
                'nama_ortu' => 'Putri',
                'tanggal_lahir' => '2024-07-09',
                'lingkungan' => '5',
                'jenis_kelamin' => 'P',
                'is_stunting' => 'Sehat',
                'alamat' => 'Jl. Anggrek No. 4',
                'have_kia' => 'Tidak',
                'created_at' => now(),
                'updated_at' => now()
            ],[
                'nik_balita' => '3174010100010005',
                'nik_ortu' => '3174010200010005',
                'nama_balita' => 'Raka',
                'nama_ortu' => 'Bagus',
                'tanggal_lahir' => '2024-10-15',
                'lingkungan' => '2',
                'jenis_kelamin' => 'L',
                'is_stunting' => 'Stunting',
                'alamat' => 'Jl. Dahlia No. 5',
                'have_kia' => 'Ya',
                'created_at' => now(),
                'updated_at' => now()
            ],[
                'nik_balita' => '3174010100010006',
                'nik_ortu' => '3174010200010006',
                'nama_balita' => 'Nadia',
                'nama_ortu' => 'Siska',
                'tanggal_lahir' => '2024-11-22',
                'lingkungan' => '4',
                'jenis_kelamin' => 'P',
                'is_stunting' => 'Perlu Perhatian',
                'alamat' => 'Jl. Flamboyan No. 6',
                'have_kia' => 'Tidak',
                'created_at' => now(),
                'updated_at' => now()
            ],[
                'nik_balita' => '3174010100010007',
                'nik_ortu' => '3174010200010007',
                'nama_balita' => 'Arif',
                'nama_ortu' => 'Rudi',
                'tanggal_lahir' => '2024-06-30',
                'lingkungan' => '1',
                'jenis_kelamin' => 'L',
                'is_stunting' => 'Sehat',
                'alamat' => 'Jl. Cempaka No. 7',
                'have_kia' => 'Ya',
                'created_at' => now(),
                'updated_at' => now()
            ],[
                'nik_balita' => '3174010100010008',
                'nik_ortu' => '3174010200010008',
                'nama_balita' => 'Salsabila',
                'nama_ortu' => 'Dewi',
                'tanggal_lahir' => '2024-05-12',
                'lingkungan' => '3',
                'jenis_kelamin' => 'P',
                'is_stunting' => 'Stunting',
                'alamat' => 'Jl. Teratai No. 8',
                'have_kia' => 'Tidak',
                'created_at' => now(),
                'updated_at' => now()
            ],[
                'nik_balita' => '3174010100010009',
                'nik_ortu' => '3174010200010009',
                'nama_balita' => 'Farhan',
                'nama_ortu' => 'Dian',
                'tanggal_lahir' => '2024-03-18',
                'lingkungan' => '5',
                'jenis_kelamin' => 'L',
                'is_stunting' => 'Sehat',
                'alamat' => 'Jl. Sawo No. 9',
                'have_kia' => 'Ya',
                'created_at' => now(),
                'updated_at' => now()
            ],[
                'nik_balita' => '3174010100010010',
                'nik_ortu' => '3174010200010010',
                'nama_balita' => 'Rina',
                'nama_ortu' => 'Eka',
                'tanggal_lahir' => '2024-02-05',
                'lingkungan' => '2',
                'jenis_kelamin' => 'P',
                'is_stunting' => 'Perlu Diverifikasi',
                'alamat' => 'Jl. Mangga No. 10',
                'have_kia' => 'Tidak',
                'created_at' => now(),
                'updated_at' => now()
            ],[
                'nik_balita' => '3174010100010011',
                'nik_ortu' => '3174010200010011',
                'nama_balita' => 'Yudha',
                'nama_ortu' => 'Hendra',
                'tanggal_lahir' => '2024-04-10',
                'lingkungan' => '4',
                'jenis_kelamin' => 'L',
                'is_stunting' => 'Sehat',
                'alamat' => 'Jl. Rambutan No. 11',
                'have_kia' => 'Ya',
                'created_at' => now(),
                'updated_at' => now()
            ],[
                'nik_balita' => '3174010100010012',
                'nik_ortu' => '3174010200010012',
                'nama_balita' => 'Laras',
                'nama_ortu' => 'Rina',
                'tanggal_lahir' => '2024-09-25',
                'lingkungan' => '1',
                'jenis_kelamin' => 'P',
                'is_stunting' => 'Stunting',
                'alamat' => 'Jl. Nangka No. 12',
                'have_kia' => 'Tidak',
                'created_at' => now(),
                'updated_at' => now()
            ]
            // ,[
            //     'nik_balita' => '3174010100010013',
            //     'nama_balita' => 'Bayu',
            //     'nama_ortu' => 'Joko',
            //     'tanggal_lahir' => '2024-08-01',
            //     'jenis_kelamin' => 'L',
            //     'lingkungan' => '3',
            //     'is_stunting' => 'Perlu Diverifikasi'
            // ],[
            //     'nik_balita' => '3174010100010014',
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

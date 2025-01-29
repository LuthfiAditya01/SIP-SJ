<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DataPerkembanganBalitaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('data_perkembangan_balita')->insert([
            [
                'id_balita' => 1,
                'berat_balita' => 2.8,
                'tanggal_penimbangan' => '2024-09-01',
                'created_at' => today(),
                'updated_at' => today(),
                'tinggi_balita' => 70
            ],
            [
                'id_balita' => 1,
                'berat_balita' => 3.2,
                'tanggal_penimbangan' => '2024-10-01',
                'created_at' => today(),
                'updated_at' => today(),
                'tinggi_balita' => 70

            ],
            [
                'id_balita' => 1,
                'berat_balita' => 3.5,
                'tanggal_penimbangan' => '2024-11-01',
                'created_at' => today(),
                'updated_at' => today(),
                'tinggi_balita' => 70

            ],
            [
                'id_balita' => 1,
                'berat_balita' => 3.8,
                'tanggal_penimbangan' => '2024-12-01',
                'created_at' => today(),
                'updated_at' => today(),
                'tinggi_balita' => 70

            ],
            [
                'id_balita' => 1,
                'berat_balita' => 4.0,
                'tanggal_penimbangan' => '2025-01-01',
                'created_at' => today(),
                'updated_at' => today(),
                'tinggi_balita' => 70

            ],
        
            // Doni - Perlu Diverifikasi
            [
                'id_balita' => 2,
                'berat_balita' => 3.1,
                'tanggal_penimbangan' => '2024-08-07',
                'created_at' => today(),
                'updated_at' => today(),
                'tinggi_balita' => 70

            ],
            [
                'id_balita' => 2,
                'berat_balita' => 3.8,
                'tanggal_penimbangan' => '2024-09-07',
                'created_at' => today(),
                'updated_at' => today(),
                'tinggi_balita' => 70

            ],
            [
                'id_balita' => 2,
                'berat_balita' => 4.2,
                'tanggal_penimbangan' => '2024-10-07',
                'created_at' => today(),
                'updated_at' => today(),
                'tinggi_balita' => 70

            ],
            [
                'id_balita' => 2,
                'berat_balita' => 4.5,
                'tanggal_penimbangan' => '2024-11-07',
                'created_at' => today(),
                'updated_at' => today(),
                'tinggi_balita' => 70,
            ],
            [
                'id_balita' => 2,
                'berat_balita' => 4.7,
                'tanggal_penimbangan' => '2024-12-07',
                'created_at' => today(),
                'updated_at' => today(),
                'tinggi_balita' => 70,
            ],
        
            // Aulia - Sehat
            [
                'id_balita' => 3,
                'berat_balita' => 3.3,
                'tanggal_penimbangan' => '2024-12-07',
                'created_at' => today(),
                'updated_at' => today(),
                'tinggi_balita' => 70,
            ],
            [
                'id_balita' => 3,
                'berat_balita' => 4.1,
                'tanggal_penimbangan' => '2025-01-07',
                'created_at' => today(),
                'updated_at' => today(),
                'tinggi_balita' => 70,
            ],
            [
                'id_balita' => 3,
                'berat_balita' => 4.8,
                'tanggal_penimbangan' => '2025-02-07',
                'created_at' => today(),
                'updated_at' => today(),
                'tinggi_balita' => 70,
            ],
            [
                'id_balita' => 3,
                'berat_balita' => 5.5,
                'tanggal_penimbangan' => '2025-03-07',
                'created_at' => today(),
                'updated_at' => today(),
                'tinggi_balita' => 70,
            ],
            [
                'id_balita' => 3,
                'berat_balita' => 6.2,
                'tanggal_penimbangan' => '2025-04-07',
                'created_at' => today(),
                'updated_at' => today(),
                'tinggi_balita' => 70,
            ],
        
            // Mutiara - Sehat
            [
                'id_balita' => 4,
                'berat_balita' => 3.2,
                'tanggal_penimbangan' => '2024-07-09',
                'created_at' => today(),
                'updated_at' => today(),
                'tinggi_balita' => 70,
            ],
            [
                'id_balita' => 4,
                'berat_balita' => 4.0,
                'tanggal_penimbangan' => '2024-08-09',
                'created_at' => today(),
                'updated_at' => today(),
                'tinggi_balita' => 70,
            ],
            [
                'id_balita' => 4,
                'berat_balita' => 4.8,
                'tanggal_penimbangan' => '2024-09-09',
                'created_at' => today(),
                'updated_at' => today(),
                'tinggi_balita' => 70,
            ],
            [
                'id_balita' => 4,
                'berat_balita' => 5.5,
                'tanggal_penimbangan' => '2024-10-09',
                'created_at' => today(),
                'updated_at' => today(),
                'tinggi_balita' => 70,
            ],
            [
                'id_balita' => 4,
                'berat_balita' => 6.2,
                'tanggal_penimbangan' => '2024-11-09',
                'created_at' => today(),
                'updated_at' => today(),
                'tinggi_balita' => 70,
            ],
        
            // Raka - Stunting
            [
                'id_balita' => 5,
                'berat_balita' => 2.7,
                'tanggal_penimbangan' => '2024-10-15',
                'created_at' => today(),
                'updated_at' => today(),
                'tinggi_balita' => 70,
            ],
            [
                'id_balita' => 5,
                'berat_balita' => 3.0,
                'tanggal_penimbangan' => '2024-11-15',
                'created_at' => today(),
                'updated_at' => today(),
                'tinggi_balita' => 70,
            ],
            [
                'id_balita' => 5,
                'berat_balita' => 3.3,
                'tanggal_penimbangan' => '2024-12-15',
                'created_at' => today(),
                'updated_at' => today(),
                'tinggi_balita' => 70,
            ],
            [
                'id_balita' => 5,
                'berat_balita' => 3.5,
                'tanggal_penimbangan' => '2025-01-15',
                'created_at' => today(),
                'updated_at' => today(),
                'tinggi_balita' => 70,
            ],
            [
                'id_balita' => 5,
                'berat_balita' => 3.7,
                'tanggal_penimbangan' => '2025-02-15',
                'created_at' => today(),
                'updated_at' => today(),
                'tinggi_balita' => 70,
            ],
        
            // Nadia - Perlu Diverifikasi
            [
                'id_balita' => 6,
                'berat_balita' => 3.0,
                'tanggal_penimbangan' => '2024-11-22',
                'created_at' => today(),
                'updated_at' => today(),
                'tinggi_balita' => 70,
            ],
            [
                'id_balita' => 6,
                'berat_balita' => 3.5,
                'tanggal_penimbangan' => '2024-12-22',
                'created_at' => today(),
                'updated_at' => today(),
                'tinggi_balita' => 70,
            ],
            [
                'id_balita' => 6,
                'berat_balita' => 4.0,
                'tanggal_penimbangan' => '2025-01-22',
                'created_at' => today(),
                'updated_at' => today(),
                'tinggi_balita' => 70,
            ],
            [
                'id_balita' => 6,
                'berat_balita' => 4.3,
                'tanggal_penimbangan' => '2025-02-22',
                'created_at' => today(),
                'updated_at' => today(),
                'tinggi_balita' => 70,
            ],
            [
                'id_balita' => 6,
                'berat_balita' => 4.6,
                'tanggal_penimbangan' => '2025-03-22',
                'created_at' => today(),
                'updated_at' => today(),
                'tinggi_balita' => 70,
            ],
        
            // Arif - Sehat
            [
                'id_balita' => 7,
                'berat_balita' => 3.4,
                'tanggal_penimbangan' => '2024-06-30',
                'created_at' => today(),
                'updated_at' => today(),
                'tinggi_balita' => 70,
            ],
            [
                'id_balita' => 7,
                'berat_balita' => 4.2,
                'tanggal_penimbangan' => '2024-07-30',
                'created_at' => today(),
                'updated_at' => today(),
                'tinggi_balita' => 70,
            ],
            [
                'id_balita' => 7,
                'berat_balita' => 5.0,
                'tanggal_penimbangan' => '2024-08-30',
                'created_at' => today(),
                'updated_at' => today(),
                'tinggi_balita' => 70,
            ],
            [
                'id_balita' => 7,
                'berat_balita' => 5.8,
                'tanggal_penimbangan' => '2024-09-30',
                'created_at' => today(),
                'updated_at' => today(),
                'tinggi_balita' => 70,
            ],
            [
                'id_balita' => 7,
                'berat_balita' => 6.5,
                'tanggal_penimbangan' => '2024-10-30',
                'created_at' => today(),
                'updated_at' => today(),
                'tinggi_balita' => 70,
            ],
        
            // Salsabila - Stunting
            [
                'id_balita' => 8,
                'berat_balita' => 2.9,
                'tanggal_penimbangan' => '2024-05-12',
                'created_at' => today(),
                'updated_at' => today(),
                'tinggi_balita' => 70,
            ],
            [
                'id_balita' => 8,
                'berat_balita' => 3.2,
                'tanggal_penimbangan' => '2024-06-12',
                'created_at' => today(),
                'updated_at' => today(),
                'tinggi_balita' => 70,
            ],
            [
                'id_balita' => 8,
                'berat_balita' => 3.5,
                'tanggal_penimbangan' => '2024-07-12',
                'created_at' => today(),
                'updated_at' => today(),
                'tinggi_balita' => 70
            ],
            [
                'id_balita' => 8,
                'berat_balita' => 3.7,
                'tanggal_penimbangan' => '2024-08-12',
                'created_at' => today(),
                'updated_at' => today(),
                'tinggi_balita' => 70
            ],
            [
                'id_balita' => 8,
                'berat_balita' => 3.9,
                'tanggal_penimbangan' => '2024-09-12',
                'created_at' => today(),
                'updated_at' => today(),
                'tinggi_balita' => 70
            ],
        
            // Farhan - Sehat
            [
                'id_balita' => 9,
                'berat_balita' => 3.3,
                'tanggal_penimbangan' => '2024-03-18',
                'created_at' => today(),
                'updated_at' => today(),
                'tinggi_balita' => 70
            ],
            [
                'id_balita' => 9,
                'berat_balita' => 4.1,
                'tanggal_penimbangan' => '2024-04-18',
                'created_at' => today(),
                'updated_at' => today(),
                'tinggi_balita' => 70
            ],
            [
                'id_balita' => 9,
                'berat_balita' => 4.9,
                'tanggal_penimbangan' => '2024-05-18',
                'created_at' => today(),
                'updated_at' => today(),
                'tinggi_balita' => 70
            ],
            [
                'id_balita' => 9,
                'berat_balita' => 5.7,
                'tanggal_penimbangan' => '2024-06-18',
                'created_at' => today(),
                'updated_at' => today(),
                'tinggi_balita' => 70
            ],
            [
                'id_balita' => 9,
                'berat_balita' => 6.4,
                'tanggal_penimbangan' => '2024-07-18',
                'created_at' => today(),
                'updated_at' => today(),
                'tinggi_balita' => 70
            ],
        
            // Rina - Perlu Diverifikasi
            [
                'id_balita' => 10,
                'berat_balita' => 3.0,
                'tanggal_penimbangan' => '2024-02-05',
                'created_at' => today(),
                'updated_at' => today(),
                'tinggi_balita' => 70,
            ],
            [
                'id_balita' => 10,
                'berat_balita' => 3.6,
                'tanggal_penimbangan' => '2024-03-05',
                'created_at' => today(),
                'updated_at' => today(),
                'tinggi_balita' => 70,
            ],
            [
                'id_balita' => 10,
                'berat_balita' => 4.1,
                'tanggal_penimbangan' => '2024-04-05',
                'created_at' => today(),
                'updated_at' => today(),
                'tinggi_balita' => 70
            ],
            [
                'id_balita' => 10,
                'berat_balita' => 4.5,
                'tanggal_penimbangan' => '2024-05-05',
                'created_at' => today(),
                'updated_at' => today(),
                'tinggi_balita' => 70
            ],
            [
                'id_balita' => 10,
                'berat_balita' => 4.8,
                'tanggal_penimbangan' => '2024-06-05',
                'created_at' => today(),
                'updated_at' => today(),
                'tinggi_balita' => 70,
            ],
        
            // Yudha - Sehat
            [
                'id_balita' => 11,
                'berat_balita' => 3.4,
                'tanggal_penimbangan' => '2024-04-10',
                'created_at' => today(),
                'updated_at' => today(),
                'tinggi_balita' => 70,
            ],
            [
                'id_balita' => 11,
                'berat_balita' => 4.2,
                'tanggal_penimbangan' => '2024-05-10',
                'created_at' => today(),
                'updated_at' => today(),
                'tinggi_balita' => 70,
            ],
            [
                'id_balita' => 11,
                'berat_balita' => 5.0,
                'tanggal_penimbangan' => '2024-06-10',
                'created_at' => today(),
                'updated_at' => today(),
                'tinggi_balita' => 70,
            ],
            [
                'id_balita' => 11,
                'berat_balita' => 5.8,
                'tanggal_penimbangan' => '2024-07-10',
                'created_at' => today(),
                'updated_at' => today(),
                'tinggi_balita' => 70,
            ],
            [
                'id_balita' => 11,
                'berat_balita' => 6.5,
                'tanggal_penimbangan' => '2024-08-10',
                'created_at' => today(),
                'updated_at' => today(),
                'tinggi_balita' => 70,
            ],
            // Laras / Stunting

            [
                'id_balita' => 12,
                'berat_balita' => 2.9,
                'tanggal_penimbangan' => '2024-05-12',
                'created_at' => today(),
                'updated_at' => today(),
                'tinggi_balita' => 70,
            ],
            [
                'id_balita' => 12,
                'berat_balita' => 3.2,
                'tanggal_penimbangan' => '2024-06-12',
                'created_at' => today(),
                'updated_at' => today(),
                'tinggi_balita' => 70,
            ],
            [
                'id_balita' => 12,
                'berat_balita' => 3.5,
                'tanggal_penimbangan' => '2024-07-12',
                'created_at' => today(),
                'updated_at' => today(),
                'tinggi_balita' => 70,
            ],
            [
                'id_balita' => 12,
                'berat_balita' => 3.7,
                'tanggal_penimbangan' => '2024-08-12',
                'created_at' => today(),
                'updated_at' => today(),
                'tinggi_balita' => 70,
            ],
            [
                'id_balita' => 12,
                'berat_balita' => 3.9,
                'tanggal_penimbangan' => '2024-09-12',
                'created_at' => today(),
                'updated_at' => today(),
                'tinggi_balita' => 70,
            ],
        ]);
    }
}

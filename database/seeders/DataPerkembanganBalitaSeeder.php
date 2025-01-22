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
                'created_at' => '2024-09-01',
                'updated_at' => '2024-09-01',
            ],
            [
                'id_balita' => 1,
                'berat_balita' => 3.2,
                'created_at' => '2024-10-01',
                'updated_at' => '2024-10-01',
            ],
            [
                'id_balita' => 1,
                'berat_balita' => 3.5,
                'created_at' => '2024-11-01',
                'updated_at' => '2024-11-01',
            ],
            [
                'id_balita' => 1,
                'berat_balita' => 3.8,
                'created_at' => '2024-12-01',
                'updated_at' => '2024-12-01',
            ],
            [
                'id_balita' => 1,
                'berat_balita' => 4.0,
                'created_at' => '2025-01-01',
                'updated_at' => '2025-01-01',
            ],
        
            // Doni - Perlu Diverifikasi
            [
                'id_balita' => 2,
                'berat_balita' => 3.1,
                'created_at' => '2024-08-07',
                'updated_at' => '2024-08-07',
            ],
            [
                'id_balita' => 2,
                'berat_balita' => 3.8,
                'created_at' => '2024-09-07',
                'updated_at' => '2024-09-07',
            ],
            [
                'id_balita' => 2,
                'berat_balita' => 4.2,
                'created_at' => '2024-10-07',
                'updated_at' => '2024-10-07',
            ],
            [
                'id_balita' => 2,
                'berat_balita' => 4.5,
                'created_at' => '2024-11-07',
                'updated_at' => '2024-11-07',
            ],
            [
                'id_balita' => 2,
                'berat_balita' => 4.7,
                'created_at' => '2024-12-07',
                'updated_at' => '2024-12-07',
            ],
        
            // Aulia - Sehat
            [
                'id_balita' => 3,
                'berat_balita' => 3.3,
                'created_at' => '2024-12-07',
                'updated_at' => '2024-12-07',
            ],
            [
                'id_balita' => 3,
                'berat_balita' => 4.1,
                'created_at' => '2025-01-07',
                'updated_at' => '2025-01-07',
            ],
            [
                'id_balita' => 3,
                'berat_balita' => 4.8,
                'created_at' => '2025-02-07',
                'updated_at' => '2025-02-07',
            ],
            [
                'id_balita' => 3,
                'berat_balita' => 5.5,
                'created_at' => '2025-03-07',
                'updated_at' => '2025-03-07',
            ],
            [
                'id_balita' => 3,
                'berat_balita' => 6.2,
                'created_at' => '2025-04-07',
                'updated_at' => '2025-04-07',
            ],
        
            // Mutiara - Sehat
            [
                'id_balita' => 4,
                'berat_balita' => 3.2,
                'created_at' => '2024-07-09',
                'updated_at' => '2024-07-09',
            ],
            [
                'id_balita' => 4,
                'berat_balita' => 4.0,
                'created_at' => '2024-08-09',
                'updated_at' => '2024-08-09',
            ],
            [
                'id_balita' => 4,
                'berat_balita' => 4.8,
                'created_at' => '2024-09-09',
                'updated_at' => '2024-09-09',
            ],
            [
                'id_balita' => 4,
                'berat_balita' => 5.5,
                'created_at' => '2024-10-09',
                'updated_at' => '2024-10-09',
            ],
            [
                'id_balita' => 4,
                'berat_balita' => 6.2,
                'created_at' => '2024-11-09',
                'updated_at' => '2024-11-09',
            ],
        
            // Raka - Stunting
            [
                'id_balita' => 5,
                'berat_balita' => 2.7,
                'created_at' => '2024-10-15',
                'updated_at' => '2024-10-15',
            ],
            [
                'id_balita' => 5,
                'berat_balita' => 3.0,
                'created_at' => '2024-11-15',
                'updated_at' => '2024-11-15',
            ],
            [
                'id_balita' => 5,
                'berat_balita' => 3.3,
                'created_at' => '2024-12-15',
                'updated_at' => '2024-12-15',
            ],
            [
                'id_balita' => 5,
                'berat_balita' => 3.5,
                'created_at' => '2025-01-15',
                'updated_at' => '2025-01-15',
            ],
            [
                'id_balita' => 5,
                'berat_balita' => 3.7,
                'created_at' => '2025-02-15',
                'updated_at' => '2025-02-15',
            ],
        
            // Nadia - Perlu Diverifikasi
            [
                'id_balita' => 6,
                'berat_balita' => 3.0,
                'created_at' => '2024-11-22',
                'updated_at' => '2024-11-22',
            ],
            [
                'id_balita' => 6,
                'berat_balita' => 3.5,
                'created_at' => '2024-12-22',
                'updated_at' => '2024-12-22',
            ],
            [
                'id_balita' => 6,
                'berat_balita' => 4.0,
                'created_at' => '2025-01-22',
                'updated_at' => '2025-01-22',
            ],
            [
                'id_balita' => 6,
                'berat_balita' => 4.3,
                'created_at' => '2025-02-22',
                'updated_at' => '2025-02-22',
            ],
            [
                'id_balita' => 6,
                'berat_balita' => 4.6,
                'created_at' => '2025-03-22',
                'updated_at' => '2025-03-22',
            ],
        
            // Arif - Sehat
            [
                'id_balita' => 7,
                'berat_balita' => 3.4,
                'created_at' => '2024-06-30',
                'updated_at' => '2024-06-30',
            ],
            [
                'id_balita' => 7,
                'berat_balita' => 4.2,
                'created_at' => '2024-07-30',
                'updated_at' => '2024-07-30',
            ],
            [
                'id_balita' => 7,
                'berat_balita' => 5.0,
                'created_at' => '2024-08-30',
                'updated_at' => '2024-08-30',
            ],
            [
                'id_balita' => 7,
                'berat_balita' => 5.8,
                'created_at' => '2024-09-30',
                'updated_at' => '2024-09-30',
            ],
            [
                'id_balita' => 7,
                'berat_balita' => 6.5,
                'created_at' => '2024-10-30',
                'updated_at' => '2024-10-30',
            ],
        
            // Salsabila - Stunting
            [
                'id_balita' => 8,
                'berat_balita' => 2.9,
                'created_at' => '2024-05-12',
                'updated_at' => '2024-05-12',
            ],
            [
                'id_balita' => 8,
                'berat_balita' => 3.2,
                'created_at' => '2024-06-12',
                'updated_at' => '2024-06-12',
            ],
            [
                'id_balita' => 8,
                'berat_balita' => 3.5,
                'created_at' => '2024-07-12',
                'updated_at' => '2024-07-12',
            ],
            [
                'id_balita' => 8,
                'berat_balita' => 3.7,
                'created_at' => '2024-08-12',
                'updated_at' => '2024-08-12',
            ],
            [
                'id_balita' => 8,
                'berat_balita' => 3.9,
                'created_at' => '2024-09-12',
                'updated_at' => '2024-09-12',
            ],
        
            // Farhan - Sehat
            [
                'id_balita' => 9,
                'berat_balita' => 3.3,
                'created_at' => '2024-03-18',
                'updated_at' => '2024-03-18',
            ],
            [
                'id_balita' => 9,
                'berat_balita' => 4.1,
                'created_at' => '2024-04-18',
                'updated_at' => '2024-04-18',
            ],
            [
                'id_balita' => 9,
                'berat_balita' => 4.9,
                'created_at' => '2024-05-18',
                'updated_at' => '2024-05-18',
            ],
            [
                'id_balita' => 9,
                'berat_balita' => 5.7,
                'created_at' => '2024-06-18',
                'updated_at' => '2024-06-18',
            ],
            [
                'id_balita' => 9,
                'berat_balita' => 6.4,
                'created_at' => '2024-07-18',
                'updated_at' => '2024-07-18',
            ],
        
            // Rina - Perlu Diverifikasi
            [
                'id_balita' => 10,
                'berat_balita' => 3.0,
                'created_at' => '2024-02-05',
                'updated_at' => '2024-02-05',
            ],
            [
                'id_balita' => 10,
                'berat_balita' => 3.6,
                'created_at' => '2024-03-05',
                'updated_at' => '2024-03-05',
            ],
            [
                'id_balita' => 10,
                'berat_balita' => 4.1,
                'created_at' => '2024-04-05',
                'updated_at' => '2024-04-05',
            ],
            [
                'id_balita' => 10,
                'berat_balita' => 4.5,
                'created_at' => '2024-05-05',
                'updated_at' => '2024-05-05',
            ],
            [
                'id_balita' => 10,
                'berat_balita' => 4.8,
                'created_at' => '2024-06-05',
                'updated_at' => '2024-06-05',
            ],
        
            // Yudha - Sehat
            [
                'id_balita' => 11,
                'berat_balita' => 3.4,
                'created_at' => '2024-04-10',
                'updated_at' => '2024-04-10',
            ],
            [
                'id_balita' => 11,
                'berat_balita' => 4.2,
                'created_at' => '2024-05-10',
                'updated_at' => '2024-05-10',
            ],
            [
                'id_balita' => 11,
                'berat_balita' => 5.0,
                'created_at' => '2024-06-10',
                'updated_at' => '2024-06-10',
            ],
            [
                'id_balita' => 11,
                'berat_balita' => 5.8,
                'created_at' => '2024-07-10',
                'updated_at' => '2024-07-10',
            ],
            [
                'id_balita' => 11,
                'berat_balita' => 6.5,
                'created_at' => '2024-08-10',
                'updated_at' => '2024-08-10',
            ],
            // Laras / Stunting

            [
                'id_balita' => 12,
                'berat_balita' => 2.9,
                'created_at' => '2024-05-12',
                'updated_at' => '2024-05-12',
            ],
            [
                'id_balita' => 12,
                'berat_balita' => 3.2,
                'created_at' => '2024-06-12',
                'updated_at' => '2024-06-12',
            ],
            [
                'id_balita' => 12,
                'berat_balita' => 3.5,
                'created_at' => '2024-07-12',
                'updated_at' => '2024-07-12',
            ],
            [
                'id_balita' => 12,
                'berat_balita' => 3.7,
                'created_at' => '2024-08-12',
                'updated_at' => '2024-08-12',
            ],
            [
                'id_balita' => 12,
                'berat_balita' => 3.9,
                'created_at' => '2024-09-12',
                'updated_at' => '2024-09-12',
            ],
        ]);
    }
}

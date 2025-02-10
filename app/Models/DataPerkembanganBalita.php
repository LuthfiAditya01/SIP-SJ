<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPerkembanganBalita extends Model
{
    use HasFactory;
    protected $table = 'data_perkembangan_balita'; // Nama tabel di database
    protected $fillable = [
        'id_balita',
        'berat_balita',
        'tinggi_balita',
        'lingkar_kepala',
        'lingkar_lengan',
        'vaksin',
        'imunisasi',
        'tanggal_penimbangan'
    ];
    protected $casts = [
        'tanggal_penimbangan' => 'date',
    ];

    protected $guarded = [];

    // Pastikan ini tidak di-set ke false
    // public $timestamps = true;
}

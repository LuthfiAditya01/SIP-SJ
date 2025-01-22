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
        'catatan_perkembangan'
    ];
}

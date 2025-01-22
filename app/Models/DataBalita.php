<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataBalita extends Model
{
    use HasFactory;

    protected $table = 'data_balita'; // Nama tabel di database
    protected $fillable = [
        'nama_balita',
        'nama_ortu',
        'tanggal_lahir',
        'lingkungan',
        'jenis_kelamin',
        'is_stunting'
    ];

    // public function balita()
    // {
    //     return $this->belongsTo(DataBalita::class, 'id_balita');
    // }

    // public function stuntingAssessments()
    // {
    //     return $this->hasMany(StuntingAssessment::class, 'id_perkembangan');
    // }

    // public function calculateZScores()
    // {
    //     // Implementasi perhitungan Z-score berdasarkan standar WHO
    //     // Akan diisi dengan logika perhitungan
    // }
}

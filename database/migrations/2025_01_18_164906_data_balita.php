<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
        Schema::create('data_balita', function (Blueprint $table){
            $table->id();
            $table->string('nama_balita');
            $table->string('nama_ortu');
            $table->string('nik_balita');
            $table->string('nik_ortu');
            $table->string('alamat');
            $table->enum('have_kia', ['Ya', 'Tidak']);
            $table->date('tanggal_lahir');
            $table->enum('lingkungan', ['1','2','3','4','5']);
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->enum('is_stunting', ['Stunting', 'Perlu Perhatian', 'Sehat', 'Perlu Diverifikasi']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_balita');
    }
};

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
        Schema::create('data_perkembangan_balita', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_balita')->constrained('data_balita');
            $table->decimal('berat_balita', 4, 2);
            $table->decimal('tinggi_balita', 4, 2);
            $table->decimal('lingkar_kepala', 4, 2);
            $table->decimal('lingkar_lengan', 4, 2);
            $table->enum('vaksin', ['Vitamin A', 'Obat Cacing', 'Tidak Diberikan']);
            $table->string('imunisasi');
            $table->date('tanggal_penimbangan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_perkembangan_balita');
    }
};

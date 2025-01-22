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
            // $table->integer('usia_bulan');
            // $table->decimal('z_score_tb', 5, 2)->nullable();  // Z-score tinggi badan
            // $table->decimal('z_score_bb', 5, 2)->nullable();  // Z-score berat badan
            $table->text('catatan_perkembangan')->nullable();
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

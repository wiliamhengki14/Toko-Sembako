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
        Schema::create('returs', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal_retur');
            $table->foreignId('id_barang')->constrained('barangs')->cascadeOnDelete()->cascadeOnUpdate();
            $table->integer('jumlah_retur');
            $table->foreignId('id_supplier')->constrained('suppliers')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('alasan_retur');
            $table->string('status_retur');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('returs');
    }
};

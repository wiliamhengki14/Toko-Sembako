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
        Schema::create('detail_penjualans', function (Blueprint $table) {
            $table->id();
            $table->string('no_nota');
            $table->foreign('no_nota')->references('no_nota')->on('penjualans')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('id_barang')->constrained('barangs')->cascadeOnDelete()->cascadeOnUpdate();
            $table->integer('jumlah_beli');
            $table->integer('harga_satuan');
            $table->integer('subtotal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_penjualans');
    }
};

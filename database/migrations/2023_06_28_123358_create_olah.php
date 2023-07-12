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
        Schema::create('olah', function (Blueprint $table) {
            $table->integer('id_olah')->primary();
            $table->string('id');
            $table->string('nama_barang');
            $table->string('jumlah_barang');
            $table->string('harga');
            $table->date('tanggal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('olah');
    }
};

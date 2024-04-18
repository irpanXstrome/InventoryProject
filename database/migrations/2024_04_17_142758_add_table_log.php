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
        Schema::create("peminjaman_logs",function (Blueprint $table){
            $table->tinyInteger("kondisi");
            $table->tinyInteger("jumlah");
            $table->tinyInteger("jenis_transaksi");
            $table->foreignId("user_id");
            $table->foreignId("barang_id");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("peminjaman_logs");
    }
};

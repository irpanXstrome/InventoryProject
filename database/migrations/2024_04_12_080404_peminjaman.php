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
        Schema::create("data_peminjaman",function (Blueprint $table){
            $table->id();
            $table->foreignId("id_user");
            $table->foreignId("id_barang");
            $table->timestamp("tanggal_peminjaman");
            $table->timestamp("tanggal_pengembalian");
            $table->boolean("status_peminjaman");
            $table->integer("total_denda");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("data_peminjaman");
    }
};

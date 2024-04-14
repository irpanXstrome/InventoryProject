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
        Schema::table("data_peminjaman",function (Blueprint $blueprint){
            $blueprint->timestamp("tanggal_batas_pengembalian")->nullable();
            $blueprint->tinyInteger("status_peminjaman")->default(1)->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table("data_peminjaman",function (Blueprint $blueprint){
            $blueprint->dropColumn("tanggal_batas_pengembalian");
            $blueprint->boolean("status_peminjaman")->default(1)->change();
        });
    }
};

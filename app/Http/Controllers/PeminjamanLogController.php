<?php

namespace App\Http\Controllers;

use App\Models\PeminjamanLog;
use Illuminate\Http\Request;

class PeminjamanLogController extends Controller
{

    public static function jenisTransaksi(int $index): string{
        return match ($index){
          default => "Unknown",
          1 => "Dipinjam",
          2 => "Dikembalian",
          3 => "Datang",
        };
    }

    public static function kondisi(int $index): string{
        return match ($index){
          default => "Unknown",
          1 => "Bertambah",
          2 => "Berkurang",
        };
    }
    public static function addLog(int $user_id,int $barang_id,int $jumlah,int $kondisi,int $jenisTransaksi){
        PeminjamanLog::query()->create([
            "barang_id" => $barang_id,
            "user_id" => $user_id,
            "kondisi" => $kondisi,
            "jenis_transaksi" => $jenisTransaksi,
            "jumlah" => $jumlah,
        ]);
    }
}

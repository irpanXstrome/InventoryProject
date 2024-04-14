<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Peminjaman;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    public function index(Request $request)
    {
        return view("peminjaman",[
            "title" => "Data Peminjaman",
            "data" => Peminjaman::all()
        ]);
    }

    public function addIndex()
    {
        return view("peminjaman_add",[
            "title" => "Tambah Peminjam",
        ]);
    }

    public function add(Request $request)
    {
        $validData = $request->validate([
            "id_user" => "required|integer|min:1",
            "id_barang" => "required|integer|min:1",
            "tanggal_peminjaman" => "required|date",
            "tanggal_pengembalian" => "required|date",
            "status_peminjaman" => "required|boolean",
            "total_denda" => "required|integer",
        ]);
        Peminjaman::query()->create($validData);
        return redirect("/peminjaman");
    }
}

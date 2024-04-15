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

    public function delete(Request $request){
        $request->validate([
            "id" => "required|numeric"
        ]);
        Peminjaman::destroy($request->id);
        return redirect("/peminjaman");
    }

    public function modifyIndex($id_peminjaman)
    {

        $peminjaman = Peminjaman::all()->find($id_peminjaman);
        if(is_null($peminjaman)){
            return redirect("/barang");
        }
        return view("barang_edit",[
            "title" => "Edit Data PEminjam dari ".$peminjaman->user->nama,
            "id_peminjaman" => $id_peminjaman
        ]);
    }


    public function modify($id_peminjaman,Request $request)
    {
        $pinjaman = Peminjaman::all()->find($id_peminjaman);
        $validData = $request->validate([
            "id_user" => "required|integer|min:1",
            "id_barang" => "required|integer|min:1",
            "tanggal_peminjaman" => "required|date",
            "tanggal_pengembalian" => "required|date",
            "status_peminjaman" => "required|boolean",
            "total_denda" => "required|integer",
        ]);
        $pinjaman->update($validData);
        return redirect("/peminjaman");
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use App\Models\PeminjamanLog;
use Illuminate\Contracts\Foundation\Application as ApplicationA;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;

class PeminjamanController extends Controller
{
    public function index()
    {
        if(!Auth::user()->isAdmin()){
            return redirect("/");
        }
        return view("final.peminjaman_interface.peminjaman",[
            "title" => "Data Peminjaman",
            "data" => Peminjaman::all()
        ]);
    }

    public function addIndex()
    {
        if(!Auth::user()->isAdmin()){
            return redirect("/");
        }
        return view("final.peminjaman_interface.peminjaman_add",[
            "title" => "Tambah Peminjam",
        ]);
    }

    private function validateRequest(Request $request,bool $edit = false){
        if(!$edit){
            return $request->validate([
                "id_user" => "required|integer|min:1",
                "id_barang" => "required|integer|min:1",
                "tanggal_peminjaman" => "required|date",
                "jumlah_barang" => "required|integer|min:1",
                "tanggal_batas_pengembalian" => "required|date",

                //data boleh kosong
                "total_denda" => "nullable|integer|min:1",
                "tanggal_pengembalian" => "nullable|date",
                "status_peminjaman" => "nullable|boolean",]
            );
        }
        return $request->validate([
            "tanggal_peminjaman" => "required|date",
            "jumlah_barang" => "required|integer|min:1",
            "tanggal_batas_pengembalian" => "required|date",

            //data boleh kosong
            "total_denda" => "nullable|integer|min:1",
            "tanggal_pengembalian" => "nullable|date",
            "status_peminjaman" => "nullable|boolean",
        ]);
    }

    public function add(Request $request): Application|Redirector|RedirectResponse|ApplicationA
    {
        if(!Auth::user()->isAdmin()){
            return redirect("/");
        }
        PeminjamanLogController::addLog($request->id_user,$request->id_barang,$request->jumlah_barang,1,1);
        Peminjaman::query()->create($this->validateRequest($request));
        return redirect("/peminjaman");
    }

    public function delete(Request $request){
        if(!Auth::user()->isAdmin()){
            return redirect("/");
        }
        $request->validate([
            "id" => "required|numeric|min:1"
        ]);
        $peminjam = Peminjaman::query()->find($request->id);
        PeminjamanLogController::addLog($peminjam->id_user,$peminjam->id_barang,$peminjam->jumlah_barang,2,0);
        Peminjaman::destroy($request->id);
        return redirect("/peminjaman");
    }

    public function modifyIndex($id_pinjaman)
    {
        if(!Auth::user()->isAdmin()){
            return redirect("/");
        }
        $peminjaman = Peminjaman::all()->find($id_pinjaman);
        if(is_null($peminjaman)){
            return redirect("/peminjaman");
        }
        return view("final.peminjaman_interface.peminjaman_edit",[
            "title" => "Edit Data Peminjam '".$peminjaman->user->nama ?? "??"."'",
            "data_peminjam" => $peminjaman
        ]);
    }



    public function modify($id_peminjaman,Request $request)
    {
        if(!Auth::user()->isAdmin()){
            return redirect("/");
        }
        $peminjaman = Peminjaman::query()
            ->find($id_peminjaman);
        $peminjaman->update($this->validateRequest($request,true));
        PeminjamanLogController::addLog($peminjaman->id_user,$peminjaman->id_barang,$peminjaman->jumlah_barang,0,$peminjaman->status_peminjaman === 2 ? 2 : 3);
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

@extends('final.master')
@section('contents')
    <h1>
        Tambah Data
    </h1>
    <form action="/peminjaman/add" method="post">
        @csrf
        <div class="form-group flex-column">
            <select id="id_user" name="id_user" class="form-control form-control-user" required>
                <option value="" disabled selected>User --select--</option>
                @foreach(\App\Models\User::all(["id","nama"]) as $userData)
                    <option value="{{$userData->id}}">{{$userData->nama}}</option>
                @endforeach
            </select>
            <select id="id_user" name="id_barang" class="form-control form-control-user" required>
                <option value="" disabled selected>Barang --select--</option>
                @foreach(\App\Models\Barang::all(["id","nama_barang"]) as $barang)
                    <option value="{{$barang->id}}">{{$barang->nama_barang}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <input type="date" name="tanggal_peminjaman" class="form-control form-control-user" id="lokasi"
                   placeholder="Tanggal Peminjaman" required>
        </div>
        <div class="form-group">
            <input type="date" name="tanggal_batas_pengembalian" class="form-control form-control-user" id="lokasi"
                   placeholder="Tanggal Batas Peminjaman" required>
        </div>
        <div class="form-group">
            <input type="number" name="jumlah_barang" value="1" class="form-control form-control-user" id="sumber_dana"
                   placeholder="Jumlah" required>
        </div>

        <div style="display: flex;">
            <a href="/peminjaman/" class="btn btn-secondary btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-arrow-left"></i>
            </span>
                <span class="text">Kembali</span>
            </a>
            <button type="submit" class="btn btn-success btn-icon-split">
                <span class="icon text-white-50">
                <i class="fas fa-check"></i>
                </span>
                <span class="text">Tambah</span>
            </button>
        </div>
    </form>
@endsection

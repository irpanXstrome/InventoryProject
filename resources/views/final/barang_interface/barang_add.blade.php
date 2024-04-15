@extends('final.master')
@section('contents')
    <h1>
        Edit Data
    </h1>
    <form action="/barang/add" method="post">
        @csrf
        <div class="form-group">
            <input type="text" name="nama_barang" class="form-control form-control-user" id="exampleInputEmail"
                   placeholder="Nama">

        </div>
        <div class="form-group">
            <input type="text" name="spesifikasi" class="form-control form-control-user" id="spesifikasi"
                   placeholder="Spesifikasi">
        </div>
        <div class="form-group">
            <input type="text" name="lokasi" class="form-control form-control-user" id="lokasi"
                   placeholder="Lokasi">
        </div>
        <div class="form-group">
            <input type="text" name="sumber_dana" class="form-control form-control-user" id="sumber_dana"
                   placeholder="Sumber Dana">
        </div>
        <div class="form-group">
            <select id="kondisi" name="kondisi" class="form-control form-control-user">
                <option value="" disabled selected>kondisi --select--</option>
                <option value="1">Baik</option>
                <option value="2">Rusak</option>
                <option value="3">Hilang</option>
            </select>
        </div>
        <div class="form-group">
            <input type="number" name="jumlah_barang" class="form-control form-control-user" id="jumlah_barang"
                   placeholder="Jumlah Barang">
        </div>

        <div style="display: flex;">
            <a href="barang/" class="btn btn-secondary btn-icon-split">
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

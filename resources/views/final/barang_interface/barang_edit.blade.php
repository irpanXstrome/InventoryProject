@extends('final.master')
@section('contents')
    <h1>
        Edit Data
    </h1>
    <form action="/barang/edit/{{$barang->id}}" method="post">
        @csrf
        <div class="form-group">
            <input type="text" name="nama_barang" class="form-control form-control-user" id="nama_barang"
                   placeholder="Nama" value="{{$barang->nama_barang}}">
            @error('nama_barang')
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Invalid</strong> Kesalahan Input
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @enderror
        </div>
        <div class="invalid-feedback">Nama harus diisi.</div>
        <div class="form-group">
            <input type="text" name="spesifikasi" class="form-control form-control-user" id="spesifikasi"
                   placeholder="Spesifikasi" value="{{$barang->spesifikasi}}">
        </div>
        <div class="form-group">
            <input type="text" name="lokasi" class="form-control form-control-user" id="lokasi"
                   placeholder="Lokasi" value="{{$barang->lokasi}}">
        </div>
        <div class="form-group">
            <input type="text" name="sumber_dana" class="form-control form-control-user" id="sumber_dana"
                   placeholder="Sumber Dana" value="{{$barang->sumber_dana}}">
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
                   placeholder="Jumlah Barang" value="{{$barang->jumlah_barang}}">
        </div>
        <div style="display: flex;">
            <a href="barang/" class="btn btn-secondary btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-arrow-left"></i>
            </span>
                <span class="text">Kembali</span>
            </a>
            <button type="submit" class="btn btn-danger btn-icon-split">
                <span class="icon text-white-50">
                <i class="fas fa-check"></i>
                </span>
                <span class="text">Kirim</span>
            </button>
        </div>
    </form>
@endsection

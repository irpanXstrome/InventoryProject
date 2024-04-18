@extends('final.master')
@section('contents')
    <h1>
        {{$title}} <br>
        Barang {{$data_peminjam->barang->nama_barang ?? "??"}}
    </h1>
    <form action="/peminjaman/edit/{{$data_peminjam->id}}" method="post">
        @csrf
        <div class="form-group">
            <div class="form-group">
                <label for="tanggal_peminjaman">Tanggal Pinjam: <input type="date" name="tanggal_peminjaman" class="form-control form-control-user" id="lokasi"
                                                                       placeholder="Tanggal Peminjaman" value="{{date("Y-m-d",strtotime($data_peminjam->tanggal_peminjaman))}}" required>
                </label>
            </div>
            <div class="form-group">
                <label for="tanggal_peminjaman">Tanggal Batas Pengembalian: <input type="date" name="tanggal_batas_pengembalian" class="form-control form-control-user" id="lokasi"
                                                                                   value="{{date("Y-m-d",strtotime($data_peminjam->tanggal_batas_pengembalian))}}">
                </label>
            </div>
            <div class="form-group">
                <label for="tanggal_peminjaman">Tanggal Pengembalian: <input type="date" name="tanggal_pengembalian" class="form-control form-control-user" id="lokasi"
                                                                             value="{{date("Y-m-d",strtotime($data_peminjam->tanggal_pengembalian ?? now()))}}" required>
                </label>
            </div>
        </div>
        <div class="form-group">
            <select id="status_peminjaman" name="status_peminjaman" class="form-control form-control-user" required>
                <option value="" disabled selected>Selesai? --select--</option>
                <option value="0">Belum</option>
                <option value="1">Selesai</option>
            </select>
        </div>
        <div class="form-group">
            <input type="number" name="total_denda" class="form-control form-control-user" id="lokasi"
                   placeholder="Denda" value="{{$data_peminjam->total_denda}}">
        </div>
        <div class="form-group">
            <input type="number" name="jumlah_barang" class="form-control form-control-user" id="sumber_dana"
                   placeholder="Jumlah" value="{{$data_peminjam->jumlah_barang}}" required>
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
                <span class="text">Kirim</span>
            </button>
        </div>
    </form>
@endsection

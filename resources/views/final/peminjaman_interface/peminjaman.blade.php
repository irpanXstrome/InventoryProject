@extends('final.master')
@section('contents')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">{{$title}}</h6>
    </div>

    <div class="card-body">
        <a href="/peminjaman/add" class="btn btn-success btn-icon-split">
        <span class="icon text-white-50">
            <i class="fas fa-info-circle"></i>
        </span>
            <span class="text">Tambah Data</span>
        </a>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Peminjam</th>
                    <th>Barang</th>
                    <th>Tanggal Pinjaman</th>
                    <th>Tanggal Batas Pinjaman</th>
                    <th>Status Peminjaman</th>
                    <th>Kondisi</th>
                    <th>Denda</th>
                    <th>Jumlah Barang</th>
                    <th>Tanggal Di Kembalikan</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                @foreach($data as $no => $peminjaman)
                    <tr>
                        <td>{{$no+1}}</td>
                        <td>{{$peminjaman->user->nama ?? "Unknown"}}</td>
                        <td>{{$peminjaman->barang->nama_barang ?? "Unknown"}}</td>
                        <td>{{$peminjaman->tanggal_peminjaman}}</td>
                        <td>{{$peminjaman->tanggal_batas_pengembalian}}</td>
                        <td>{{
                                match($peminjaman->status_pengembalian){
                                  null => "Belum Kembali",
                                  1 => "Baik",
                                  2 => "Rusak",
                                  3 => "Hilang",
                                }
                            }}
                        </td>
                        <td>{{
                                match($peminjaman->kondisi){
                                  null => "Belum Kembali",
                                  1 => "Baik",
                                  2 => "Rusak",
                                  3 => "Hilang",
                                }
                            }}
                        </td>
                        <td>{{$peminjaman->total_denda}}</td>
                        <td>{{$peminjaman->jumlah_barang}}</td>
                        <td>{{$peminjaman->tanggal_pengembalian ?? "Belum Kembali"}}</td>
                        <td>

                            <form action="/peminjaman/delete" method="post">
                                @csrf
                                <div style="display: flex">
                                    <a href="/peminjaman/edit/{{$peminjaman->id}}" class="btn btn-primary btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-info-circle"></i>
                                    </span>
                                        <span class="text">Edit</span>
                                    </a>
                                    <button name="id" value="{{$peminjaman->id}}" type="submit" class="btn btn-danger btn-icon-split">
                                        <span class="icon text-white-25">
                                            <i class="fas fa-trash"></i>
                                        </span>
                                        <span class="text">Delete</span>
                                    </button>
                                </div>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

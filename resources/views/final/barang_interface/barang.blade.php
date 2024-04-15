@extends('final.master')
@section('contents')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">{{$title}}</h6>
    </div>

    <div class="card-body">
        <a href="/barang/add" class="btn btn-success btn-icon-split">
        <span class="icon text-white-50">
            <i class="fas fa-info-circle"></i>
        </span>
            <span class="text">Tambah Data</span>
        </a>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Spesifikasi</th>
                    <th>Lokasi</th>
                    <th>Kondisi</th>
                    <th>Jumlah Barang</th>
                    <th>Sumber Dana</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                @foreach($data as $no => $barang)
                    <tr>
                        <td>{{$no+1}}</td>
                        <td>{{$barang->nama_barang}}</td>
                        <td>{{$barang->spesifikasi}}</td>
                        <td>{{$barang->lokasi}}</td>
                        <td>{{$barang->kondisi}}</td>
                        <td>{{$barang->jumlah_barang}}</td>
                        <td>{{$barang->sumber_dana}}</td>
                        <td>

                            <form action="/barang/delete" method="post">
                                @csrf
                                <div style="display: flex">
                                    <a href="/barang/edit/{{$barang->id}}" class="btn btn-primary btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-info-circle"></i>
                                    </span>
                                        <span class="text">Edit</span>
                                    </a>
                                    <button name="id_barang" value="{{$barang->id}}" type="submit" class="btn btn-danger btn-icon-split">
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

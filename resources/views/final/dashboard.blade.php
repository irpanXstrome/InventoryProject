@php use App\Http\Controllers\PeminjamanLogController; @endphp
@extends('final.master')
@section('contents')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Log Transaksi</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Sumber</th>
                        <th>Barang</th>
                        <th>Jumlah</th>
                        <th>Kondisi</th>
                        <th>Jenis Transaksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($log_peminjaman as $log)
                    <tr>
                        <td>{{$log->user->nama ?? "Unknown"}}</td>
                        <td>{{$log->barang->nama_barang ?? "Unknown"}}</td>
                        <td>{{$log->jumlah}}</td>
                        <td>{{PeminjamanLogController::kondisi($log->kondisi)}}</td>
                        <td>{{PeminjamanLogController::jenisTransaksi($log->jenis_transaksi)}}</td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

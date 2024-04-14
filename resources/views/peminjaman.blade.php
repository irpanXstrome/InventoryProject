@extends('master')
<style>
    table {
        width: 100%; /* Lebar tabel mengikuti lebar konten */
        border-collapse: collapse; /* Menggabungkan border antar sel */
    }

    th, td {
        border: 1px solid #ddd; /* Border untuk setiap sel */
        padding: 8px; /* Padding di dalam sel */
        text-align: left; /* Teks rata kiri di dalam sel */
    }

    th {
        background-color: #f2f2f2; /* Warna latar belakang sel header */
    }
    .small-button {
        background-color: #4CAF50; /* Warna latar belakang tombol */
        color: white; /* Warna teks pada tombol */
        border: none; /* Menghilangkan border */
        padding: 4px 8px; /* Padding di dalam tombol */
        text-align: center; /* Meratakan teks di tengah tombol */
        text-decoration: none; /* Menghilangkan garis bawah pada teks */
        display: inline-block; /* Membuat tombol menjadi inline block */
        border-radius: 4px; /* Mengatur sudut border tombol */
        cursor: pointer; /* Mengubah cursor menjadi tangan saat dihover */
        transition: background-color 0.3s ease; /* Efek transisi saat hover */
        flex: 1;
    }

    .small-button:hover {
        background-color: #45a049; /* Warna latar belakang saat hover */
    }
</style>
@section('view')
    <h1>{{ $title }}</h1>
    <a href="/peminjaman/add" class="small-button">Tambah Data</a>
    <table>
        <tr>
            <th>NO</th>
            <th>Tanggal Peminjaman</th>
            <th>Tanggal Pengembalian</th>
            <th>Status Peminjaman</th>
            <th>Total Denda</th>
            <th>Barang Dipinjam</th>
            <th>Dipinjam Oleh</th>
            <th>Aksi</th>
        </tr>
        @foreach($data as $id => $peminjaman)
            <tr>

                <td>{{$id+1}}</td>
                <td>{{$peminjaman->tanggal_peminjaman}}</td>
                <td>{{$peminjaman->tanggal_pengembalian}}</td>
                @if($peminjaman->status_peminjaman)
                    <td style="color: #4CAF50">Active</td>
                @else
                    <td style="color: #9ca3af">Ended</td>
                @endif
                <td>{{$peminjaman->total_denda}}</td>
                {{-- @if(($barang = \App\Models\Barang::query()->find($peminjaman->id_barang)) != null)
                    <td>{{$barang->nama_barang}}</td>
                @else
                    <td style="color: red">Unknown Data</td>
                @endif --}}

                <td>{{ $peminjaman->barang->nama_barang ?? 'Unknown Data' }}</td>

                {{-- @if($barang = \App\Models\User::all()->find($peminjaman->id_user) != null)
                    <td>{{\App\Models\User::all()->find($peminjaman->id_user)->nama}}</td>
                @else
                    <td style="color: red">Unknown User</td>
                @endif --}}
                <td>{{ $peminjaman->user->nama ?? 'Unknown User' }}</td>
                <td>
                    <form action="/peminjaman/delete" method="post">
                        @csrf
                        <a href="/peminjaman/edit/{{$peminjaman->id}}" class="small-button">Edit</a>
                        <button name="id" type="submit" class="small-button" style="background-color: red" value="{{$peminjaman->id}}">Delete</button>
                    </form>
                </td>
            </tr>
{{--            {{dd($peminjaman->user())}}--}}
        @endforeach
    </table>
@endsection

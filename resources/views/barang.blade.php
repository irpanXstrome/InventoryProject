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
    <a href="/barang/add" class="small-button">Tambah Data</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Spesifikasi</th>
            <th>Lokasi</th>
            <th>Kondisi</th>
            <th>Jumlah Barang</th>
            <th>Sumber Dana</th>
            <th>Aksi</th>
        </tr>
        @foreach($data as $barang)
            <tr>
                <td>{{$barang->id}}</td>
                <td>{{$barang->nama_barang}}</td>
                <td>{{$barang->spesifikasi}}</td>
                <td>{{$barang->lokasi}}</td>
                <td>{{$barang->kondisi}}</td>
                <td>{{$barang->jumlah_barang}}</td>
                <td>{{$barang->sumber_dana}}</td>
                <td>

                    <form action="/barang/delete" method="post">
                        @csrf
                        <a href="/barang/edit/{{$barang->id}}" class="small-button">Edit</a>
                        <button name="id_barang" type="submit" class="small-button" style="background-color: red" value="{{$barang->id}}">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection

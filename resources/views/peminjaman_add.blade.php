@php use App\Models\Barang;use App\Models\User; @endphp
@extends('master')
@section('view')
    <style>
        /* styles.css */

        .container {

        }

        .form-group {
            margin-bottom: 20px;
            margin-right: 10%;
            margin-left: 10%;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="number"],
        select,
        textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 5px;
        }

        textarea {
            resize: vertical;
        }

        button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #45a049;
        }

    </style>
    <h1>{{ $title }}</h1>
    <div class="container">
        <form action="/peminjaman/add" method="post">
            @csrf
            <div class="form-group">
                <label for="tanggal_peminjaman">Tanggal Peminjaman:</label>
                <input type="date" id="tanggal_peminjaman" name="tanggal_peminjaman" required>
            </div>
            <div class="form-group">
                <label for="tanggal_pengembalian">Tanggal Pengembalian:</label>
                <input type="date" id="tanggal_pengembalian" name="tanggal_pengembalian" required>
            </div>
            <div class="form-group">
                <label for="status_peminjaman">Status Peminjaman:</label>
                <select id="status_peminjaman" name="status_peminjaman" required>
                    <option value="0">Selesai</option>
                    <option value="1">Ditolak</option>
                </select>
            </div>
            <div class="form-group">
                <label for="total_denda">Total Denda:</label>
                <input type="number" id="total_denda" name="total_denda" required>
            </div>
            <div class="form-group">
                <label for="barang_dipinjam">Barang Dipinjam:</label>
                <select id="barang_dipinjam" name="id_barang" required>
                    @foreach(Barang::all(["id","nama_barang","jumlah_barang"]) as $barang)
                        @if($barang->jumlah_barang > 0)
                            <option value="{{$barang->id}}">{{$barang->nama_barang}}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="dipinjam_oleh">Dipinjam Oleh:</label>
                <select id="dipinjam_oleh" name="id_user" required>
                    @foreach(User::all(["id","nama"]) as $user)
                        <option value="{{$user->id}}">{{$user->nama}}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
@endsection

@extends('master')
@section('view')
    <style>
        /* styles.css */

        .container{

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
        <form action="/barang/edit/{{$id_peminjaman}}" method="post">
            @csrf
            <div class="form-group">
                <label for="nama_barang">Nama:</label>
                <input type="text" id="nama_barang" name="nama_barang" required>
            </div>
            <div class="form-group">
                <label for="spesifikasi">Spesifikasi:</label>
                <textarea id="spesifikasi" name="spesifikasi" rows="4" required></textarea>
            </div>
            <div class="form-group">
                <label for="lokasi">Lokasi:</label>
                <input type="text" id="lokasi" name="lokasi" required>
            </div>
            <div class="form-group">
                <label for="kondisi">Kondisi:</label>
                <select id="kondisi" name="kondisi" required>
                    <option value="baik">Baik</option>
                    <option value="rusak">Rusak</option>
                    <option value="rusak parah">Rusak Parah</option>
                </select>
            </div>
            <div class="form-group">
                <label for="jumlah_barang">Jumlah Barang:</label>
                <input type="number" id="jumlah_barang" name="jumlah_barang" required>
            </div>
            <div class="form-group">
                <label for="sumber_dana">Sumber Dana:</label>
                <input type="text" id="sumber_dana" name="sumber_dana" required>
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
@endsection

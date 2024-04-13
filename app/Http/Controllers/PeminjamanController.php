<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    public function index(Request $request)
    {
        return view("peminjaman",[
            "title" => "Data Peminjaman"
        ]);
    }
}

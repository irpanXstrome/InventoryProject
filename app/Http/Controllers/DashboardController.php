<?php

namespace App\Http\Controllers;

use App\Models\PeminjamanLog;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;

class DashboardController extends Controller
{
    public function index(): View|Application|Factory
    {
        return view("final.dashboard",
            [
                "title" => "dashboard",
                "log_peminjaman" => PeminjamanLog::all()
            ]
        );
    }
}

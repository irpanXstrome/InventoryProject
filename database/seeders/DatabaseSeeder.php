<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Barang;
use App\Models\Peminjaman;
use App\Models\PeminjamanLog;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Number;
use Illuminate\Support\Str;
use Ramsey\Uuid\Type\Time;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::factory(3)->create();
        Barang::factory(5)->create();
        Peminjaman::factory(5)->create();
        PeminjamanLog::factory(5)->create();
    }
}

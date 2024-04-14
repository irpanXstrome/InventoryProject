<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Peminjaman>
 */
class PeminjamanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "id_user" => fake()->numberBetween(1,5),
            "id_barang" => fake()->numberBetween(1,5),
            "tanggal_peminjaman" => fake()->dateTimeInInterval,
            "tanggal_batas_pengembalian" => fake()->dateTimeInInterval('+7 days'),
            "tanggal_pengembalian" => fake()->dateTimeInInterval('+30 days'),
            "status_peminjaman" => mt_rand(1,3),
            "jumlah_barang" => mt_rand(1,2),
            "total_denda" => fake()->numberBetween(2000,10000),
        ];
    }
}

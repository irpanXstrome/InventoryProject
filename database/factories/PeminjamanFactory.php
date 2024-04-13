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
            "tanggal_pengembalian" => fake()->dateTimeInInterval('+30 days'),
            "status_peminjaman" => fake()->boolean,
            "total_denda" => fake()->numberBetween(2000,10000),
        ];
    }
}

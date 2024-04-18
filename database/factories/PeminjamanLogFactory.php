<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PeminjamanLog>
 */
class PeminjamanLogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "barang_id" => fake()->numberBetween(1,5),
            "user_id" => fake()->numberBetween(1,5),
            "kondisi" => fake()->numberBetween(1,2),
            "jumlah" => fake()->numberBetween(1,4),
            "jenis_transaksi" => fake()->numberBetween(1,3),
        ];
    }
}

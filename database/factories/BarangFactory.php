<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Barang>
 */
class BarangFactory extends Factory
{


    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "nama_barang" => fake()->sentence(1),
            "spesifikasi" => fake()->sentence(1),
            "lokasi" => fake()->city,
            "kondisi" => fake()->sentence(1),
            "jumlah_barang" => fake()->numberBetween(1,40),
            "sumber_dana" => fake()->company,
        ];
    }
}

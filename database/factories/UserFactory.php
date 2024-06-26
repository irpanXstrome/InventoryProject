<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = fake();
        return [
            'nama' => $faker->name(),
            'is_admin' => $faker->boolean,
            'alamat' => $faker->streetAddress(),
            'no_telepon' => $faker->phoneNumber(),
            'username' => $faker->userName,
            'email' => $faker->unique()->safeEmail(),
            'password' => static::$password ??= Hash::make('password'),
        ];
    }
}

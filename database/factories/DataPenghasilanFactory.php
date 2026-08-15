<?php

namespace Database\Factories;

use App\Models\DataPenghasilan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<DataPenghasilan>
 */
class DataPenghasilanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => \App\Models\User::factory(),
            'sumber' => fake()->randomElement(['Gaji PT A', 'Freelance', 'Usaha Dagang', 'Gaji PT B']),
            'jumlah' => fake()->numberBetween(3000000, 20000000) * 12, // Tahunan
            'periode' => fake()->randomElement(['2024', '2025']),
            'terverifikasi' => fake()->boolean(80),
        ];
    }
}

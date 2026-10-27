<?php

namespace Database\Factories;

use App\Models\MenuKantin;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<MenuKantin>
 */
class MenuKantinFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'kode_menu' => 'KM-' . $this->faker->unique()->numberBetween(1000, 9999),
        'nama_menu' => $this->faker->randomElement(['Nasi Goreng', 'Mie Ayam', 'Es Teh Manis', 'Bakso Urat', 'Soto Ayam', 'Jus Alpukat', 'Ayam Geprek']),
        'kategori' => $this->faker->randomElement(['Makanan Berat', 'Minuman', 'Snack']),
        'harga' => $this->faker->numberBetween(5, 30) * 1000,
        'stok' => $this->faker->numberBetween(10, 50),
        'status' => $this->faker->randomElement(['Tersedia', 'Habis']),
        'keterangan' => $this->faker->sentence(),
    ];
    }
}

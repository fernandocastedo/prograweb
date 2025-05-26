<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->words(2, true),  // Ej: "Taladro eléctrico"
            'categoria' => $this->faker->randomElement(['Herramientas', 'Electricidad', 'Construcción', 'Pintura', 'Plomería']),
            'precio' => $this->faker->randomFloat(2, 10, 500),
            'stock' => $this->faker->numberBetween(1, 100),
            'marca' => $this->faker->company(),
            'descripcion' => $this->faker->paragraph(2),
            'imagen' => 'producto' . $this->faker->numberBetween(1, 10) . '.jpg', // nombres como producto1.jpg
        ];
    }
}

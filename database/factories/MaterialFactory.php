<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Material>
 */
class MaterialFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre'=>fake()->word(),
            'precio'=>fake()->numberBetween(20000, 50000),
            'descripcion'=>fake()->text(),
            'cantidad'=>fake()->numberBetween(2, 50),
        ];
    }
}

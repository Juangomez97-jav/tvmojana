<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Servicio>
 */
class ServicioFactory extends Factory
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
            'descripcion'=>fake()->text(),
            'precio'=>fake()->numberBetween(20000, 50000),
            'estado'=>fake()->word(),
            'empleado_id'=>fake()->numberBetween(1, 100),
            'empresa_id'=>fake()->numberBetween(1, 5),
        ];
    }
}

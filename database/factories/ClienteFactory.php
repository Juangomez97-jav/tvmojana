<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cliente>
 */
class ClienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombres' =>fake()->word(),
            'apellidos' =>fake()->word(),
            'documento' =>fake()->numberBetween(20000000, 1999999999),
            'telefono' =>fake()->numberBetween(3100000000, 3249999999),
            'barrio'=>fake()->word(),
            'calle'=>fake()->numberBetween(1, 10),
            'poste'=>fake()->numberBetween(1, 450),
            'sucursal'=>fake()->word(),
            'estado'=>fake()->word(),
        ];
    }
}

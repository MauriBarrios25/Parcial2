<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lenguajes>
 */
class LenguajesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->name,
            'informacion' => $this->faker->paragraph,
            'creador' => $this->faker->name,
            'fecha' => $this->faker->text()
        ];
    }
}

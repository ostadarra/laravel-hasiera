<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Entidad>
 */
class EntidadFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->word(),
            'padre_id' => 0,
            'ficha' => $this->faker->boolean(),
            'imagen' => 'entidades/' . $this->faker->image('public/assets/imagenes/entidades', 640, 480,null, false)
        ];
    }
}

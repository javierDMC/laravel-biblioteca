<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Libro;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Libro>
 */
class LibroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Libro::class;

    public function definition()
    {
        return [
            'titulo' => $this->faker->sentence,
            'editorial' => $this->faker->sentence(2),
            'precio' => $this->faker->randomFloat(2, 5, 20)
            ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Autor;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Autor>
 */
class AutorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Autor::class;
    public function definition()
    {
        //con fakers

            return [
                'nombre' => $this->faker->name,
                'nacimiento' => $this->faker->numberBetween(1950,1990)
            ];


        //sin fakers
        // return [
        //     'nombre' => "Autor".rand(1,100),
        //     'nacimiento' => rand(1950,1990)
        // ];
    }
}

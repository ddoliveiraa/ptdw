<?php

namespace Database\Factories;

use App\Models\Cliente;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClienteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Cliente::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'designacao'=> $this->faker->sentence($nbWords = 2, $variableNbWords = true),
            'obs'=> $this -> faker -> text($maxNbChars = 100),
        ];
    }
}

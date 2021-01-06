<?php

namespace Database\Factories;

use App\Models\Responsavel;
use Illuminate\Database\Eloquent\Factories\Factory;

class ResponsavelFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Responsavel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_cliente'=> $this->faker->numberBetween($min = 1, $max = 5),
            'nome'=> $this -> faker -> name,
            'email' => $this -> faker -> freeEmail,
        ];
    }
}

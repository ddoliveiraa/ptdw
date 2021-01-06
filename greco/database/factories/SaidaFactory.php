<?php

namespace Database\Factories;

use App\Models\Saida;
use Illuminate\Database\Eloquent\Factories\Factory;

class SaidaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Saida::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_cliente'=> $this -> faker -> numberBetween($min = 1, $max = 5),
            'id_produto'=> $this -> faker ->numberBetween($min = 1, $max = 300),
            'id_ordem'=> $this -> faker ->numberBetween($min = 1, $max = 20),
            'id_solicitante'=> $this -> faker ->numberBetween($min = 1, $max = 3),
            'id_operador'=> $this -> faker ->numberBetween($min = 1, $max = 20),
            'obs'=> $this -> faker -> text($maxNbChars = 100),

        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Operador;
use Illuminate\Database\Eloquent\Factories\Factory;

class OperadorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Operador::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome'=> $this -> faker -> name,
            'email'=> $this -> faker -> freeEmail,
            'perfil'=> $this -> faker -> numberBetween($min = 1, $max = 3),
            'obs'=> $this -> faker -> text($maxNbChars = 100),
            'data_criacao'=> $this -> faker -> dateTime($max = 'now', $timezone = null),
           // 'desativacao'=> $this -> faker -> company,
        ];
    }
}

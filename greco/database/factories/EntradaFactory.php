<?php

namespace Database\Factories;

use App\Models\Entrada;
use Illuminate\Database\Eloquent\Factories\Factory;

class EntradaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Entrada::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_inventario'=> $this -> faker -> numberBetween($min = 1, $max = 300),
            'id_ordem'=> $this -> faker -> numberBetween($min = 1, $max = 20),
            'sala'=> 1,
            'armario'=> $this -> faker -> numberBetween($min = 1, $max = 3),
            'prateleira'=> 1 ,
            'fornecedor'=> $this -> faker -> numberBetween($min = 1, $max = 50),
            'marca'=> $this -> faker -> numberBetween($min = 1, $max = 5),
            'referencia'=> $this -> faker -> randomNumber,
            'preco'=> $this -> faker -> randomFloat($nbMaxDecimals = 2),
            'iva'=> $this -> faker -> numberBetween($min = 1, $max = 3),
            'capacidade'=> $this -> faker -> randomNumber,
            'tipo_embalagem'=> $this -> faker -> numberBetween($min = 1, $max = 3),
            'estado_fisico'=> $this -> faker -> numberBetween($min = 1, $max = 3),
            'cor'=> $this -> faker -> numberBetween($min = 1, $max = 7),
            'textura_viscosidade'=> $this -> faker -> numberBetween($min = 1, $max = 6),
            'peso_bruto'=> $this -> faker -> randomFloat($nbMaxDecimals = 4),
            'data_entrada'=> $this -> faker -> date($format = 'd-m-y', $max = 'now'),
            //'data_abertura'=> $this -> faker -> date($format = 'd-m-y', $min = 'now'),
            'data_validade'=> $this -> faker -> date($format = 'd-m-y', $min = 'now'),
            'operador'=> $this -> faker -> numberBetween($min = 1, $max = 20),
            'unidade'=> $this -> faker -> numberBetween($min = 1, $max = 5),
            'obs'=> $this -> faker -> text($maxNbChars = 100),

        ];
    }
}

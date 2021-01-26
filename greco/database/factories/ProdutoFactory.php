<?php

namespace Database\Factories;

use App\Models\Produto;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProdutoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Produto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'familia'=> $this -> faker -> numberBetween($min = 1, $max = 2),
            'designacao'=> $this -> faker -> sentence($nbWords = 2, $variableNbWords = true),
            'formula'=> $this -> faker -> userName,
            'peso_molecular'=> $this -> faker -> randomFloat($nbMaxDecimals = 4, $min = 0, $max = 2) ,
            'CAS'=> $this -> faker -> phoneNumber,
            'condicoes_armazenamento'=> $this -> faker -> numberBetween($min = 1, $max = 3),
            'ventilado'=> $this -> faker -> numberBetween($min = 0, $max = 1),
            //'anexo_sds'=> $this -> faker -> file($sourceDir = '/tmp', $targetDir = '/tmp'),
            // 'stock'=> $this -> faker -> name,
            'stock_min'=> $this -> faker -> numberBetween($min = 1, $max = 10),
            'foto'=> '/dist/img/placeholder.png',
            'sub_familia'=> $this -> faker -> numberBetween($min = 1, $max = 4), 
            'ativo' => 1
        ];
    }
}

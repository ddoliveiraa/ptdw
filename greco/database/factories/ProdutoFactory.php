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
            'designacao'=> ucfirst($this -> faker -> word)." ".$this -> faker -> word,
            'formula'=> strtoupper($this -> faker -> lexify('???')).$this -> faker -> randomDigit,
            'peso_molecular'=> $this -> faker -> randomFloat($nbMaxDecimals = 4, $min = 0, $max = 2) ,
            'CAS'=> $this -> faker -> numberBetween($min = 1000, $max = 9999). "-". $this -> faker -> numberBetween($min = 10, $max = 99) ."-".$this -> faker -> randomDigit ,
            'condicoes_armazenamento'=> $this -> faker -> numberBetween($min = 1, $max = 3),
            'ventilado'=> $this -> faker -> numberBetween($min = 0, $max = 1),
            //'anexo_sds'=> $this -> faker -> file($sourceDir = '/tmp', $targetDir = '/tmp'),
            // 'stock'=> $this -> faker -> name,
            'stock_min'=> $this -> faker -> numberBetween($min = 1, $max = 10),
            'foto'=> 'placeholder.png',
            'sub_familia'=> $this -> faker -> numberBetween($min = 1, $max = 4), 
            'ativo' => 1
        ];
    }
}

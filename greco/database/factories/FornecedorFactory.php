<?php

namespace Database\Factories;

use App\Models\Fornecedor;
use Illuminate\Database\Eloquent\Factories\Factory;

class FornecedorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Fornecedor::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'designacao'=> $this -> faker -> company,
            'morada'=> $this -> faker -> address,
            'localidade'=> $this -> faker -> city,
            'codigopostal'=> $this -> faker -> postcode,
            'telefone'=> $this -> faker -> phoneNumber,
            'NIF'=> $this -> faker -> randomNumber($nbDigits = 9),
            'email'=> $this -> faker -> companyEmail,
            'vendedor1'=> $this -> faker -> name,
            'telefone1'=> $this -> faker -> phoneNumber,
            'email1'=> $this -> faker -> companyEmail,
            'vendedor2'=> $this -> faker -> name,
            'telefone2'=> $this -> faker -> phoneNumber,
            'email2'=> $this -> faker -> companyEmail,
            'condicoes_especiais'=> $this -> faker -> text($maxNbChars = 100),
            'obs'=> $this -> faker -> text($maxNbChars = 100),

        ];
    }
}

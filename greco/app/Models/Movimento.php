<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movimento extends Model
{
    use HasFactory;

    //Cada registo de movimento tem um e só um produto associado
    public function produtos()
    {
        return $this->hasOne(Produto::class);
    }

    public function entradas()
    {
        return $this->hasOne(Entrada::class);
    }

    public function saidas()
    {
        return $this->hasOne(Saida::class);
    }

    public function fornecedors()
    {
        return $this->hasOne(Fornecedor::class);
    }

    public function clientes()
    {
        return $this->hasOne(Cliente::class);
    }

    public function operadors()
    {
        return $this->hasOne(Operador::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movimento extends Model
{
    use HasFactory;
    protected $table = 'entradas';


    //Cada registo de movimento tem um e só um produto associado
    public function produtos()
    {
        return $this->hasOne(Produto::class);
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

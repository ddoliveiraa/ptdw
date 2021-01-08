<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Saida extends Model
{
    use HasFactory;
    protected $table = 'saidas';
    protected $fillable = ['id_cliente','id_produto','id_ordem','id_solicitante','id_operador','obs'];

    public function produtos()
    {
        return $this->hasOne(Produto::class);
    }

    public function solicitantes()
    {
        return $this->hasOne(Solicitante::class);
    }

    public function clientes()
    {
        return $this->hasOne(Cliente::class);
    }

    public function operadores()
    {
        return $this->hasOne(Operador::class);
    }
}

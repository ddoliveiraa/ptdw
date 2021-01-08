<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    use HasFactory;
    protected $fillable = ['designacao','morada','localidade','codigopostal','telefone','NIF','email','vendedor1','telefone1','email1','vendedor2','telefone2','email2','condicoes_especiais','obs'];


    public function entradas()
    {
        return $this->hasMany(Entrada::class);
    }
}

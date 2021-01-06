<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $table = 'clientes';
    protected $fillable = ['designacao','obs'];

    public function responsaveis()
    {
        return $this->hasMany(Responsavel::class);
    }

    public function solicitantes()
    {
        return $this->hasMany(Solicitante::class);
    }

    public function saidas()
    {
        return $this->hasMany(Saida::class);
    }
}

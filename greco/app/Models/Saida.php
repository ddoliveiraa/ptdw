<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Saida extends Model
{
    use HasFactory;
    protected $fillable = ['id_cliente','id_produto','id_ordem','id_solicitante','id_operador','obs'];

    public function produto()
    {
        return $this->belongsTo(Produto::class, 'id_produto');
    }

    public function get_operador()
    {
        return $this->belongsTo(Operador::class, 'id_operador');
    }

    public function get_solicitante()
    {
        return $this->belongsTo(Solicitante::class, 'id_solicitante');
    }
     
    public function get_cliente()
    {
        return $this->belongsTo(Cliente::class, 'id_cliente');
    }

}

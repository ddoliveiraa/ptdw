<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entrada extends Model
{
    use HasFactory;
    protected $fillable = ['id_inventario','id_ordem','sala','armario','prateleira','fornecedor','marca','referencia','preco','iva','capacidade','tipo_embalagem','estado_fisico','cor','textura_viscosidade','peso_bruto','data_entrada','data_abertura','data_validade','operador','unidade','obs'];

    public function produto()
    {
        return $this->belongsTo(Produto::class, 'id_inventario');
    }

    public function get_fornecedor()
    {
        return $this->belongsTo(Fornecedor::class, 'fornecedor');
    }

    public function get_operador()
    {
        return $this->belongsTo(Operador::class, 'operador');
    }

}

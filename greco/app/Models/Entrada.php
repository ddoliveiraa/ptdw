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

    public function get_unidade()
    {
        return $this->belongsTo(unidade::class, 'unidade');
    }

    public function get_textura()
    {
        return $this->belongsTo(textura_viscosidade::class, 'textura_viscosidade');
    }

    public function get_prateleira()
    {
        return $this->belongsTo(prateleira::class, 'prateleira');
    }

    public function get_armario()
    {
        return $this->belongsTo(armario::class, 'armario');
    }

    public function get_marcas()
    {
        return $this->belongsTo(marcas::class, 'marca');
    }

    public function get_sala()
    {
        return $this->belongsTo(sala::class, 'sala');
    }
    
    public function get_cor()
    {
        return $this->belongsTo(cores::class, 'cor');
    }

    public function get_estado()
    {
        return $this->belongsTo(estados_fisicos::class, 'estado_fisico');
    }

    public function get_tipo_embalagem()
    {
        return $this->belongsTo(tipo_embalagem::class, 'tipo_embalagem');
    }

    public function get_iva()
    {
        return $this->belongsTo(taxa_iva::class, 'iva');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Responsavel extends Model
{
    use HasFactory;
    protected $table = 'responsaveis';
    protected $fillable = ['id_cliente','nome','email'];

    public function clientes()
    {
        return $this->belongsTo(Cliente::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitante extends Model
{
    use HasFactory;
    protected $fillable = ['id_cliente','nome','email'];

    public function clientes()
    {
        return $this->belongsTo(Cliente::class, 'id_cliente');
    }

}

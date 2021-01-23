<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Historico_Operador extends Model
{
    use HasFactory;
    protected $fillable = ['nome_adm','operador','data','operacao','obs'];
    protected $table = 'historico_operadores';


    public function get_operacao()
    {
        return $this->belongsTo(operacao::class, 'operacao');
    }

    public function get_operador()
    {
        return $this->belongsTo(Operador::class, 'operador');
    }

}



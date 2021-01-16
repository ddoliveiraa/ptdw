<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operador extends Model
{
    use HasFactory;
    protected $table = 'operadors';
    protected $fillable = ['nome','email','perfil','obs','data_criacao'];


    public function entradas()
    {
        return $this->hasMany(Entrada::class);
    }

    public function saidas()
    {
        return $this->hasMany(Saida::class);
    }

    public function get_perfil()
   {
       return $this->belongsTo(Perfil::class, 'perfil');
   }
}

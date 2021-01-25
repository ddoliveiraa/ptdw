<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operador extends Model
{
    use HasFactory;
    protected $table = 'operadors';
    protected $fillable = ['nome','email','perfil','obs','data_criacao'];

    public function get_perfil()
   {
       return $this->belongsTo(Perfil::class, 'perfil');
   }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
   use HasFactory;
   protected $fillable = ['familia','designacao','formula','peso_molecular','CAS','condicoes_armazenamento','ventilado','anexo_sds','stock_min','foto','sub_familia'];


   //Um produto pode ter várias movimentos associados a si
   public function movimentos() 
   {
      return $this->belongsToMany(Movimento::class);
   }

   public function entradas() 
   {
      return $this->belongsToMany(Entrada::class);
   }

   public function saidas() 
   {
      return $this->belongsToMany(Saida::class);
   }
}
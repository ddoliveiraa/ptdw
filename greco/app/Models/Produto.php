<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
   use HasFactory;
   protected $fillable = ['familia','designacao','formula','peso_molecular','CAS','condicoes_armazenamento','ventilado','anexo_sds','stock_min','foto','sub_familia'];


   public function entradas() 
   {
      return $this->hasMany(Entrada::class, 'id_inventario');
   }

   public function saidas() 
   {
      return $this->hasMany(Saida::class , 'id_produto');
   }

   public function get_fam()
   {
       return $this->belongsTo(familia::class, 'familia');
   }

   public function get_condicao()
   {
       return $this->belongsTo(condicoes_armazenamento::class, 'condicoes_armazenamento');
   }

   public function get_subfam()
   {
       return $this->belongsTo(sub_familia::class, 'sub_familia');
   }

   public function pictogramas() 
   {
      return $this->belongsToMany(pictograma::class);
   }
   
   public function advertencias()
   {
       return $this->belongsToMany(advertencia::class);
   }

   public function recomendacoes()
   {
       return $this->belongsToMany(recomendacoe::class);
   }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;
    protected $fillable = ['familia','designacao','formula','peso_molecular','CAS','condicoes_armazenamento','ventilado','anexo_sds','stock_min','foto','sub_familia'];
}

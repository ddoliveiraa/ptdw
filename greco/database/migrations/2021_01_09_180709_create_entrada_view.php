<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;


class CreateEntradaView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        DB::statement("CREATE VIEW entradaView AS (select COALESCE (p.id, e.id_inventario, s.id_produto) as produto_id,
        p.designacao, (select familia.nome from familia where familia.id = p.familia) as familia, (select sub_familia.nome from sub_familia where sub_familia.id = p.id) as subfamilia,
        e.id as entrada_id, e.id_ordem, e.sala, e.armario, e.prateleira,(select fornecedors.designacao from fornecedors where fornecedors.id = e.fornecedor) as fornecedor, e.capacidade, (select unidade.unidade from unidade where unidade.id = e.unidade), e.data_entrada, e.data_validade, e.data_termino,
        s.id as saida_id, (select clientes.designacao from clientes where clientes.id = s.id_cliente) as cliente, s.id_ordem as saida_ordem, (select operadors.nome from operadors where operadors.id = s.id_operador) as operador
        from produtos as p
        full outer join entradas as e on p.id = e.id_inventario
        full outer join saidas as s on s.id_produto = COALESCE(p.id, e.id_inventario))
        ");
    }
        
 
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP VIEW entradaView');
    }
}

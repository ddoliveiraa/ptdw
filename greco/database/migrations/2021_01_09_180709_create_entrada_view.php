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
        DB::statement("CREATE VIEW entradaView AS (SELECT p.id AS id_produto,
        p.designacao, (SELECT familia.nome FROM familia WHERE familia.id = p.familia) AS familia, (SELECT sub_familia.nome FROM sub_familia WHERE sub_familia.id = p.sub_familia) AS subfamilia,
        e.id AS id_entrada, e.id_ordem, (SELECT sala.sala FROM sala WHERE sala.id = e.sala) AS sala, (SELECT armario.armario FROM armario WHERE armario.id = e.armario) AS armario, (SELECT prateleira.prateleira FROM prateleira WHERE prateleira.id = e.prateleira) AS prateleira,(SELECT fornecedors.designacao FROM fornecedors WHERE fornecedors.id = e.fornecedor) AS fornecedor, e.capacidade, (SELECT unidade.unidade FROM unidade WHERE unidade.id = e.unidade), e.data_entrada, e.data_validade, e.data_termino, (select operadors.nome from operadors where operadors.id = e.operador) as operador
        FROM produtos AS p
        JOIN entradas AS e on p.id = e.id_inventario)
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

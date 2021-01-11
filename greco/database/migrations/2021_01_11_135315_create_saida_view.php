<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateSaidaView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("CREATE VIEW saidaView AS (SELECT s.id AS id_saida, p.id AS id_produto, s.id_ordem AS id_ordem,
        p.designacao, (SELECT familia.nome FROM familia WHERE familia.id = p.familia) AS familia, (SELECT sub_familia.nome FROM sub_familia WHERE sub_familia.id = p.sub_familia) AS subfamilia,
        (SELECT clientes.designacao FROM clientes WHERE clientes.id = s.id_cliente) AS cliente, (SELECT solicitantes.nome FROM solicitantes WHERE solicitantes.id = s.id_solicitante) AS solicitante, (SELECT operadors.nome FROM operadors WHERE operadors.id = s.id_operador) AS operador, s.created_at as data
        FROM produtos AS p
        JOIN saidas AS s ON s.id_produto = p.id)
        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP VIEW saidaView');
    }
}

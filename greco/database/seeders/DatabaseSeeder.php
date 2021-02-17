<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use \App\Models\Notification;
use App\Models\operacao;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //operacoes disponiveis
        DB::table('operacaos')->insert(['operacao' => 'Registo Entrada',]);
        DB::table('operacaos')->insert(['operacao' => 'Registo Saída',]);
        DB::table('operacaos')->insert(['operacao' => 'Registo Cliente',]);
        DB::table('operacaos')->insert(['operacao' => 'Registo Operador',]);

        // \App\Models\User::factory(10)->create();
        DB::table('cores')->insert(['cor' => "Azul",]);
        DB::table('cores')->insert(['cor' => "Roxo",]);
        DB::table('cores')->insert(['cor' => "Verde",]);
        DB::table('cores')->insert(['cor' => "Branco",]);
        DB::table('cores')->insert(['cor' => "Amarelo",]);
        DB::table('cores')->insert(['cor' => "Preto",]);
        DB::table('cores')->insert(['cor' => "Vermelho",]);

        DB::table('_i_v_a')->insert(['nome' => "23",]);
        DB::table('_i_v_a')->insert(['nome' => "13",]);
        DB::table('_i_v_a')->insert(['nome' => "06",]);

        DB::table('tipo_embalagem')->insert(['nome' => "Vidro",]);
        DB::table('tipo_embalagem')->insert(['nome' => "Plástico",]);
        DB::table('tipo_embalagem')->insert(['nome' => "Papel",]);

        DB::table('estados_fisicos')->insert(['estado_fisico' => "Sólido",]);
        DB::table('estados_fisicos')->insert(['estado_fisico' => "Líquido",]);
        DB::table('estados_fisicos')->insert(['estado_fisico' => "Gasoso",]);

        DB::table('sala')->insert(['sala' => "A24",]);

        DB::table('marcas')->insert(['marca' => "Bio-rad",]);
        DB::table('marcas')->insert(['marca' => "Zymo Research",]);
        DB::table('marcas')->insert(['marca' => "Gucci",]);
        DB::table('marcas')->insert(['marca' => "New England Biolabs",]);
        DB::table('marcas')->insert(['marca' => "Merck",]);


        DB::table('armario')->insert(['armario' => "Armário 1", 'id_sala' => '1']);
        DB::table('armario')->insert(['armario' => "Armário 2", 'id_sala' => '1']);
        DB::table('armario')->insert(['armario' => "Frigorífico", 'id_sala' => '1']);

        DB::table('prateleira')->insert(['prateleira' => "Prateleira 1", 'id_armario' => '1']);
        DB::table('prateleira')->insert(['prateleira' => "Prateleira 2", 'id_armario' => '1']);
        DB::table('prateleira')->insert(['prateleira' => "Prateleira 1", 'id_armario' => '2']);
        DB::table('prateleira')->insert(['prateleira' => "Prateleira 2", 'id_armario' => '2']);
        DB::table('prateleira')->insert(['prateleira' => "Prateleira 3", 'id_armario' => '2']);
        DB::table('prateleira')->insert(['prateleira' => "Prateleira 1", 'id_armario' => '3']);
        DB::table('prateleira')->insert(['prateleira' => "Prateleira 2", 'id_armario' => '3']);
        DB::table('prateleira')->insert(['prateleira' => "Gaveta 1", 'id_armario' => '3']);
        DB::table('prateleira')->insert(['prateleira' => "Gaveta 2", 'id_armario' => '3']);

        DB::table('textura_viscosidade')->insert(['textura_viscosidade' => "Muita Viscosidade",]);
        DB::table('textura_viscosidade')->insert(['textura_viscosidade' => "Alguma Viscosidade",]);
        DB::table('textura_viscosidade')->insert(['textura_viscosidade' => "Pouca Viscosidade",]);
        DB::table('textura_viscosidade')->insert(['textura_viscosidade' => "Muita Granulosidade",]);
        DB::table('textura_viscosidade')->insert(['textura_viscosidade' => "Alguma Granulosidade",]);
        DB::table('textura_viscosidade')->insert(['textura_viscosidade' => "Pouca Granulosidade",]);

        DB::table('unidade')->insert(['unidade' => "ml",]);
        DB::table('unidade')->insert(['unidade' => "dl",]);
        DB::table('unidade')->insert(['unidade' => "gr",]);
        DB::table('unidade')->insert(['unidade' => "mg",]);
        DB::table('unidade')->insert(['unidade' => "ng",]);

        DB::table('perfil')->insert(['nome' => "Supervisão Geral",]);
        DB::table('perfil')->insert(['nome' => "Supervisão Setorial",]);
        DB::table('perfil')->insert(['nome' => "Fiel de Armazém",]);

        DB::table('familia')->insert(['nome' => "Químico",]);
        DB::table('familia')->insert(['nome' => "Não Químico",]);

        DB::table('sub_familia')->insert(['nome' => "Plástico",]);
        DB::table('sub_familia')->insert(['nome' => "Vidro",]);
        DB::table('sub_familia')->insert(['nome' => "Metal",]);
        DB::table('sub_familia')->insert(['nome' => "Outros",]);

        DB::table('condicoes_armazenamento')->insert(['condicao' => "Temperatura Muito Baixa",]);
        DB::table('condicoes_armazenamento')->insert(['condicao' => "Temperatura Baixa",]);
        DB::table('condicoes_armazenamento')->insert(['condicao' => "Temperatura Ambiente",]);
        DB::table('condicoes_armazenamento')->insert(['condicao' => "Temperatura Alta",]);
        DB::table('condicoes_armazenamento')->insert(['condicao' => "Temperatura Muito Alta",]);

        DB::table('pictogramas')->insert(['codigo' => "GHS01", 'nome' => "GHS01: Exploding bomb", 'imagem' => "/dist/img/Pictogramas/Explosive.gif"]);
        DB::table('pictogramas')->insert(['codigo' => "GHS02", 'nome' => "GHS02: Flame", 'imagem' => "/dist/img/Pictogramas/Flammable.gif"]);
        DB::table('pictogramas')->insert(['codigo' => "GHS03", 'nome' => "GHS03: Flame over circle", 'imagem' => "/dist/img/Pictogramas/RoundFlammable.gif"]);
        DB::table('pictogramas')->insert(['codigo' => "GHS04", 'nome' => "GHS04: Gas cylinder", 'imagem' => "/dist/img/Pictogramas/CompressedGas.gif"]);
        DB::table('pictogramas')->insert(['codigo' => "GHS05", 'nome' => "GHS05: Corrosion", 'imagem' => "/dist/img/Pictogramas/Corrosive.gif"]);
        DB::table('pictogramas')->insert(['codigo' => "GHS06", 'nome' => "GHS06: Skull and crossbones", 'imagem' => "/dist/img/Pictogramas/Toxic.gif"]);
        DB::table('pictogramas')->insert(['codigo' => "GHS07", 'nome' => "GHS07: Exclamation mark", 'imagem' => "/dist/img/Pictogramas/Danger.gif"]);
        DB::table('pictogramas')->insert(['codigo' => "GHS08", 'nome' => "GHS08: Health hazard", 'imagem' => "/dist/img/Pictogramas/Systemic.gif"]);
        DB::table('pictogramas')->insert(['codigo' => "GHS09", 'nome' => "GHS09: Environment", 'imagem' => "/dist/img/Pictogramas/Pollution.gif"]);

        DB::table('advertencias')->insert(['texto' => "H290 - Corrosivo a metais",]);
        DB::table('advertencias')->insert(['texto' => "H314 - Corrosivo à pele e olhos",]);
        DB::table('advertencias')->insert(['texto' => "H335 - Causa irritação respiratória",]);

        DB::table('recomendacoes')->insert(['texto' => "P280 - Usar luvas e oculos de proteção",]);
        DB::table('recomendacoes')->insert(['texto' => "P201 - Pedir instruções específicas antes da utilização",]);
        DB::table('recomendacoes')->insert(['texto' => "P235 - Conservar em ambiente fresco",]);

        \App\Models\Cliente::factory()->count(10)->create();
        \App\Models\Fornecedor::factory()->count(50)->create();
        \App\Models\Responsavel::factory()->count(20)->create();
        \App\Models\Solicitante::factory()->count(100)->create();
        \App\Models\Operador::factory()->count(20)->create();

        for ($i = 1; $i <= 150; $i++) {
            \App\Models\Produto::factory()->create(['familia' => 1,]);

            for ($j = 1; $j <= rand(1, 3); $j++) {
                DB::table('produto_recomendacoe')->insert(['produto_id' => $i, 'recomendacoe_id' => $j]);
                DB::table('advertencia_produto')->insert(['produto_id' => $i, 'advertencia_id' => $j]);
            }
            for ($j = 1; $j <= rand(1, 9); $j++) {
                DB::table('pictograma_produto')->insert(['produto_id' => $i, 'pictograma_id' => $j]);
            }

            for ($j = 1; $j <= 15; $j++) {
                \App\Models\Entrada::factory()->create(['id_inventario' => $i, 'id_ordem' => $j,]);
            }
            for ($j = 1; $j <= 5; $j++) {
                \App\Models\Saida::factory()->create(['id_produto' => $i, 'id_ordem' => $j,]);
            }
        }

        for ($i = 1; $i <= 150; $i++) {
            \App\Models\Produto::factory()->create(['familia' => 2, 'formula' => null, 'CAS' => null,]);
        }

        for ($i = 300; $i >= 130; $i--) {
            for ($j = 1; $j <= 15; $j++) {
                \App\Models\Entrada::factory()->create(['id_inventario' => $i, 'id_ordem' => $j,]);
            }
            for ($j = 1; $j <= 5; $j++) {
                \App\Models\Saida::factory()->create(['id_produto' => $i, 'id_ordem' => $j,]);
            }
        }
    }
}

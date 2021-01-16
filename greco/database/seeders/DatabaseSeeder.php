<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use \App\Models\Notification;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // \App\Models\User::factory(10)->create();
        DB::table('cores')->insert(['cor' => "Azul",]);
        DB::table('cores')->insert(['cor' => "Roxo",]);
        DB::table('cores')->insert(['cor' => "Verde",]);
        DB::table('cores')->insert(['cor' => "Branco",]);
        DB::table('cores')->insert(['cor' => "Amarelo",]);
        DB::table('cores')->insert(['cor' => "Preto",]);
        DB::table('cores')->insert(['cor' => "Vermelho",]);

        DB::table('_i_v_a')->insert(['nome' => "0.23",]);
        DB::table('_i_v_a')->insert(['nome' => "0.13",]);
        DB::table('_i_v_a')->insert(['nome' => "0.06",]);

        DB::table('tipo_embalagem')->insert(['nome' => "Vidro",]);
        DB::table('tipo_embalagem')->insert(['nome' => "Plastico",]);
        DB::table('tipo_embalagem')->insert(['nome' => "Papel",]);

        DB::table('estados_fisicos')->insert(['estado_fisico' => "Solido",]);
        DB::table('estados_fisicos')->insert(['estado_fisico' => "Liquido",]);
        DB::table('estados_fisicos')->insert(['estado_fisico' => "Gasoso",]);

        DB::table('sala')->insert(['sala' => "A24",]);

        DB::table('marcas')->insert(['marca' => "Nike",]);
        DB::table('marcas')->insert(['marca' => "Continente",]);
        DB::table('marcas')->insert(['marca' => "Gucci",]);
        DB::table('marcas')->insert(['marca' => "Adidas",]);
        DB::table('marcas')->insert(['marca' => "Mesa",]);

        DB::table('armario')->insert(['armario' => "Armário 1", 'id_sala' => '1']);
        DB::table('armario')->insert(['armario' => "Armário 2", 'id_sala' => '1']);

        DB::table('prateleira')->insert(['prateleira' => "Prateleira 1", 'id_armario' => '1']);
        DB::table('prateleira')->insert(['prateleira' => "Prateleira 2", 'id_armario' => '1']);
        DB::table('prateleira')->insert(['prateleira' => "Prateleira 1", 'id_armario' => '2']);
        DB::table('prateleira')->insert(['prateleira' => "Prateleira 2", 'id_armario' => '2']);

        DB::table('textura_viscosidade')->insert(['textura_viscosidade' => "Viscoso",]);
        DB::table('textura_viscosidade')->insert(['textura_viscosidade' => "Granoloso",]);
        DB::table('textura_viscosidade')->insert(['textura_viscosidade' => "Fofinho",]);
        DB::table('textura_viscosidade')->insert(['textura_viscosidade' => "Muito Fofinho",]);
        DB::table('textura_viscosidade')->insert(['textura_viscosidade' => "Muito Viscoso",]);
        DB::table('textura_viscosidade')->insert(['textura_viscosidade' => "Pouco Viscoso",]);

        DB::table('unidade')->insert(['unidade' => "ml",]);
        DB::table('unidade')->insert(['unidade' => "dl",]);
        DB::table('unidade')->insert(['unidade' => "gr",]);
        DB::table('unidade')->insert(['unidade' => "mg",]);
        DB::table('unidade')->insert(['unidade' => "ng",]);

        DB::table('perfil')->insert(['nome' => "Supervisão geral",]);
        DB::table('perfil')->insert(['nome' => "Supervisão setorial",]);
        DB::table('perfil')->insert(['nome' => "Fiel Armazem",]);

        DB::table('familia')->insert(['nome' => "Químico",]);
        DB::table('familia')->insert(['nome' => "Não Químico",]);

        DB::table('sub_familia')->insert(['nome' => "Plástico",]);
        DB::table('sub_familia')->insert(['nome' => "Vidro",]);
        DB::table('sub_familia')->insert(['nome' => "Metal",]);
        DB::table('sub_familia')->insert(['nome' => "Outros",]);

        DB::table('condicoes_armazenamento')->insert(['condicao' => "Temperatura Ambiente",]);
        DB::table('condicoes_armazenamento')->insert(['condicao' => "Temperatura Artico",]);
        DB::table('condicoes_armazenamento')->insert(['condicao' => "Temperatura Copa Cabana",]);

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
        DB::table('recomendacoes')->insert(['texto' => "P201 - Obtain special instructions before use",]);
        DB::table('recomendacoes')->insert(['texto' => "P230 - Keep wetted with…",]);
        DB::table('recomendacoes')->insert(['texto' => "P235 - Keep cool",]);

        \App\Models\Cliente::factory()->count(10)->create();
        \App\Models\Fornecedor::factory()->count(50)->create();
        \App\Models\Responsavel::factory()->count(20)->create();
        \App\Models\Solicitante::factory()->count(100)->create();
        \App\Models\Operador::factory()->count(20)->create();
        \App\Models\Produto::factory()->count(300)->create();
        \App\Models\Entrada::factory()->count(1000)->create();
        \App\Models\Saida::factory()->count(100)->create();

        //tabelas de relacao pra testes
        DB::table('produto_recomendacoe')->insert(['produto_id' => 1, 'recomendacoe_id' => 1]);
        DB::table('produto_recomendacoe')->insert(['produto_id' => 1, 'recomendacoe_id' => 2]);
        DB::table('produto_recomendacoe')->insert(['produto_id' => 1, 'recomendacoe_id' => 3]);

        DB::table('advertencia_produto')->insert(['produto_id' => 1, 'advertencia_id' => 1]);
        DB::table('advertencia_produto')->insert(['produto_id' => 1, 'advertencia_id' => 2]);
        DB::table('advertencia_produto')->insert(['produto_id' => 1, 'advertencia_id' => 3]);

        DB::table('pictograma_produto')->insert(['produto_id' => 1, 'pictograma_id' => 1]);
        DB::table('pictograma_produto')->insert(['produto_id' => 1, 'pictograma_id' => 2]);
        DB::table('pictograma_produto')->insert(['produto_id' => 1, 'pictograma_id' => 3]);
        DB::table('pictograma_produto')->insert(['produto_id' => 1, 'pictograma_id' => 4]);
        DB::table('pictograma_produto')->insert(['produto_id' => 1, 'pictograma_id' => 5]);
        DB::table('pictograma_produto')->insert(['produto_id' => 1, 'pictograma_id' => 6]);
        DB::table('pictograma_produto')->insert(['produto_id' => 1, 'pictograma_id' => 7]);
        DB::table('pictograma_produto')->insert(['produto_id' => 1, 'pictograma_id' => 8]);
        DB::table('pictograma_produto')->insert(['produto_id' => 1, 'pictograma_id' => 9]);



        for ($i = 0; $i <= 10; $i++) {
            \App\Models\Entrada::factory()->create(['id_inventario' => 1, 'id_ordem' => $i,]);
        }
        for ($i = 0; $i <= 10; $i++) {
            \App\Models\Saida::factory()->create(['id_produto' => 1, 'id_ordem' => $i,]);
        }
        for ($i = 0; $i <= 50; $i++) {
            \App\Models\Entrada::factory()->create(['id_inventario' => 1, 'id_ordem' => $i,]);
        }


        Notification::create([
            'tipo' => 'Fora de Validade',
            'id_produto' =>3,
            'texto' => 'O produto está fora de alidade'
        ]);
    }
}

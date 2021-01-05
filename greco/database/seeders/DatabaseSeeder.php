<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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

        DB::table('pictogramas')->insert(['nome' => "GHS01: Exploding bomb", 'imagem'=> "null"]);
        DB::table('pictogramas')->insert(['nome' => "GHS02: Flame", 'imagem'=> "null"]);
        DB::table('pictogramas')->insert(['nome' => "GHS03: Flame over circle", 'imagem'=> "null"]);
        DB::table('pictogramas')->insert(['nome' => "GHS04: Gas cylinder", 'imagem'=> "null"]);
        DB::table('pictogramas')->insert(['nome' => "GHS05: Corrosion", 'imagem'=> "null"]);
        DB::table('pictogramas')->insert(['nome' => "GHS06: Skull and crossbones", 'imagem'=> "null"]);
        DB::table('pictogramas')->insert(['nome' => "GHS07: Exclamation mark", 'imagem'=> "null"]);
        DB::table('pictogramas')->insert(['nome' => "GHS08: Health hazard", 'imagem'=> "null"]);
        DB::table('pictogramas')->insert(['nome' => "GHS09: Environment", 'imagem'=> "null"]);

        DB::table('advertencia')->insert(['texto' => "H290 - Corrosivo a metais",]);
        DB::table('advertencia')->insert(['texto' => "H314 - Corrosivo à pele e olhos",]);
        DB::table('advertencia')->insert(['texto' => "H335 - Causa irritação respiratória",]);

        DB::table('recomendacoes')->insert(['texto' => "P280 - Usar luvas e oculos de proteção",]);
        DB::table('recomendacoes')->insert(['texto' => "P201 - Obtain special instructions before use",]);
        DB::table('recomendacoes')->insert(['texto' => "P230 - Keep wetted with…",]);
        DB::table('recomendacoes')->insert(['texto' => "P235 - Keep cool",]);

        
    }
}

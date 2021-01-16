<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Movimento;
use App\Models\Entrada;
use App\Models\pictograma;
use App\Models\Saida;
use App\Models\Produto;
use App\Models\unidade;
use App\Models\sub_familia;
use App\Models\tipo_embalagem;
use App\Models\Fornecedor;
use App\Models\marcas;
use App\Models\armario;
use App\Models\prateleira;
use App\Models\taxa_iva;
use App\Models\estados_fisicos;
use App\Models\textura_viscosidade;
use App\Models\cores;
use App\Models\Cliente;
use App\Models\Solicitante;

class MovimentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getNEmbalagem(Request $request){
        if ($request->ajax()) {
            $id_inventario = $request->produto;
            $id_ordem = Entrada::where('id_inventario',$id_inventario)->max('id_ordem')+1;
            $output = $id_inventario . "-" . $id_ordem;
            return $output;
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getPrateleira(Request $request){
        if ($request->ajax()) {
            $id_armario = $request->armario;
            $data = prateleira::where('id_armario',$id_armario)->get();
            $output = '';
            foreach ($data as $row) {
                $output .= '<option value="' . $row->id . '">' . $row->prateleira . '</option>';
            }
            return $output;
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function storeEntradaQ(Request $request){
        //  *** QUIMICOS ***
        //VALIDAÇÂO
        request()->validate([
            'data_entrada_input' => 'required|date_format:d/m/Y',
            'data_abertura_input' => 'date_format:d/m/Y',
            'data_validade_input' => 'date_format:d/m/Y',
            'data_termino_input' => 'date_format:d/m/Y',
        ]);

        //ADD NA BD
        $id_inventario = request('produto'); //request('produto') está a receber o id
        $id_ordem = Entrada::where('id_inventario',$id_inventario)->max('id_ordem')+1;
        
        $Entrada = new Entrada();
        $Entrada->id_inventario = $id_inventario;
        $Entrada->id_ordem = $id_ordem;
        $Entrada->sala = 1;
        $Entrada->armario = request('armario');
        $Entrada->prateleira = request('prateleira');
        $Entrada->fornecedor = request('fornecedor');
        $Entrada->marca = request('marca');
        $Entrada->referencia = request('referencia');
        $Entrada->preco = request('preco');
        $Entrada->iva = request('iva');
        $Entrada->capacidade = request('cap_embalagem');
        $Entrada->tipo_embalagem = request('tipo_embalagem');
        $Entrada->estado_fisico = request('estado');
        $Entrada->cor = request('cor');
        $Entrada->textura_viscosidade = request('textura');
        $Entrada->peso_bruto = request('peso');
        $Entrada->data_entrada = request('data_entrada_input');
        $Entrada->data_abertura = request('data_abertura_input');
        $Entrada->data_validade = request('data_validade_input');
        $Entrada->data_termino = request('data_termino_input');
        $Entrada->operador = 1; //Workaroud - Precisa de autenticação
        $Entrada->unidade = request('unidades');
        $Entrada->obs = request('obvs');
        $Entrada->save();
        
        return redirect('movimentos/entrada');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function storeEntradaNQ(Request $request){
        //  *** NAO QUIMICOS ***
        //VALIDAÇÂO
        request()->validate([
            'data_entrada_nq_input' => 'required|date_format:d/m/Y',
            'data_abertura_nq_input' => 'date_format:d/m/Y',
            'data_validade_nq_input' => 'date_format:d/m/Y',
            'data_termino_nq_input' => 'date_format:d/m/Y',
        ]);

        //ADD NA BD
        $id_inventario = request('produto_nq'); //request('produto') está a receber o id
        $id_ordem = Entrada::where('id_inventario',$id_inventario)->max('id_ordem')+1;
        
        $Entrada = new Entrada();
        $Entrada->id_inventario = $id_inventario;
        $Entrada->id_ordem = $id_ordem;
        $Entrada->sala = 1;
        $Entrada->armario = request('armario_nq');
        $Entrada->prateleira = request('prateleira_nq');
        $Entrada->fornecedor = request('fornecedor_nq');
        $Entrada->marca = request('marca_nq');
        $Entrada->referencia = request('referencia_nq');
        $Entrada->preco = request('preco_nq');
        $Entrada->iva = request('iva_nq');
        $Entrada->capacidade = request('cap_embalagem_nq');
        $Entrada->tipo_embalagem = request('tipo_embalagem_nq');
        $Entrada->cor = request('cor_nq');
        $Entrada->peso_bruto = request('peso_nq');
        $Entrada->data_entrada = request('data_entrada_nq_input');
        $Entrada->data_abertura = request('data_abertura_nq_input');
        $Entrada->data_validade = request('data_validade_nq_input');
        $Entrada->data_termino = request('data_termino_nq_input');
        $Entrada->operador = 1; //Workaroud - Precisa de autenticação
        $Entrada->unidade = request('unidades_nq');
        $Entrada->obs = request('obvs_nq');
        $Entrada->save();
        
        return redirect('movimentos/entrada');
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showEndrada()
    {
        $produtos = Produto::where('familia',1)->get();
        $produtosnq = Produto::where('familia',2)->get();
        $unidades = unidade::all();
        $tipoembalagem = tipo_embalagem::all();
        $fornecedores = Fornecedor::all();
        $marcas = marcas::all();
        $armarios = armario::all();
        $ivas = taxa_iva::all();
        $estados = estados_fisicos::all();
        $texturas_viscosidades = textura_viscosidade::all();
        $cores = cores::all();

        return view('movimentos.entrada', compact('produtos', 'produtosnq', 'unidades', 'tipoembalagem',
                    'fornecedores', 'marcas', 'armarios', 'ivas',
                    'estados', 'texturas_viscosidades', 'cores'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getEmbalagensProdutos(Request $request){
        if ($request->ajax()) {
            $id_produto = $request->produto;
            return Entrada::where('id',$id_produto)->get();
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getSolicitantes(Request $request){
        if ($request->ajax()) {
            $id_cliente = $request->cliente;
            return Solicitante::where('id_cliente',$id_cliente)->get();
        }
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showSaida()
    {
        $produtos_com_entrada = Produto::join('entradas', 'produtos.id', '=', 'entradas.id_inventario')->get();
        $clientes = Cliente::all();
        $solicitantes = Solicitante::all();

        return view('movimentos.saida', compact('produtos_com_entrada', 'clientes', 'solicitantes'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subfamilias = sub_familia::all();
        $pictogramas = pictograma::all();
        return view('movimentos.historico', compact('subfamilias', 'pictogramas'));
    }

    /*
   AJAX request (Páginação com datatables ENTRADAS)
   */
    public function getEntradas(Request $request)
    {

        ## Read value
        $draw = $request->get('draw');
        $start = $request->get("start");
        $rowperpage = $request->get("length"); // Rows display per page

        $columnIndex_arr = $request->get('order');
        $columnName_arr = $request->get('columns');
        $order_arr = $request->get('order');
        $search_arr = $request->get('search');

        $columnIndex = $columnIndex_arr[0]['column']; // Column index
        $columnName = $columnName_arr[$columnIndex]['data']; // Column name
        $columnSortOrder = $order_arr[0]['dir']; // asc or desc
        $searchValue = $search_arr['value']; // Search value

        // Total records
        $totalRecords = DB::table('entradaview')->select('count(*) as allcount')->count();
        $totalRecordswithFilter = DB::table('entradaview')->select('count(*) as allcount')
            ->where('designacao', 'ilike', '%' . $searchValue . '%')
            ->orWhere('entradaview.id_produto', 'ilike', '%' . $searchValue . '%')
            ->orWhere('entradaview.armario', 'ilike', '%' . $searchValue . '%')
            ->orWhere('entradaview.capacidade', 'ilike', '%' . $searchValue . '%')
            ->orWhere('entradaview.fornecedor', 'ilike', '%' . $searchValue . '%')
            ->orWhere('entradaview.operador', 'ilike', '%' . $searchValue . '%')
            ->orWhere('entradaview.familia', 'ilike', '%' . $searchValue . '%')
            ->orWhere('entradaview.subfamilia', 'ilike', '%' . $searchValue . '%')->count();

        // Fetch records
        $records = DB::table('entradaview')->orderBy($columnName, $columnSortOrder)
            ->where('entradaview.designacao', 'ilike', '%' . $searchValue . '%')
            ->orWhere('entradaview.id_produto', 'ilike', '%' . $searchValue . '%')
            ->orWhere('entradaview.armario', 'ilike', '%' . $searchValue . '%')
            ->orWhere('entradaview.capacidade', 'ilike', '%' . $searchValue . '%')
            ->orWhere('entradaview.fornecedor', 'ilike', '%' . $searchValue . '%')
            ->orWhere('entradaview.operador', 'ilike', '%' . $searchValue . '%')
            ->orWhere('entradaview.familia', 'ilike', '%' . $searchValue . '%')
            ->orWhere('entradaview.subfamilia', 'ilike', '%' . $searchValue . '%')
            ->select('entradaview.*')
            ->skip($start)
            ->take($rowperpage)
            ->get();

        $data_arr = array();

        foreach ($records as $record) {
            $designacao = $record->designacao;
            $id_produto = "$record->id_produto - $record->id_ordem";
            $armario = "$record->armario - $record->prateleira";
            $capacidade = $record->capacidade;
            $unidade = $record->unidade;
            $fornecedor = $record->fornecedor;
            $data_entrada = date("d/m/Y", strtotime($record->data_entrada));
            $data_validade = date("d/m/Y", strtotime($record->data_validade));
            if ($record->data_termino != null) {
                $data_termino = date("d/m/Y", strtotime($record->data_termino));
            } else {
                $data_termino = "";
            }
            $operador = $record->operador;
            $familia = $record->familia;
            $subfamilia = $record->subfamilia;
            $link = "<a href='/movimentos/show_entrada/$record->id_entrada'> Ver Mais &nbsp<i class='fa fa-arrow-right'></i></a>";

            $data_arr[] = array(
                "designacao" => $designacao,
                "id_produto" => $id_produto,
                "armario" => $armario,
                "capacidade" => "$capacidade $unidade",
                "fornecedor" => $fornecedor,
                "data_entrada" => $data_entrada,
                "data_validade" => $data_validade,
                "data_termino" => $data_termino,
                "operador" => $operador,
                "familia" => $familia,
                "subfamilia" => $subfamilia,
                "link" => $link,
            );
        }

        $response = array(
            "draw" => intval($draw),
            "iTotalRecords" => $totalRecords,
            "iTotalDisplayRecords" => $totalRecordswithFilter,
            "aaData" => $data_arr
        );

        echo json_encode($response);
        exit;
    }

    /*
   AJAX request (Páginação com datatables Saidas)
   */
    public function getSaidas(Request $request)
    {

        ## Read value
        $draw = $request->get('draw');
        $start = $request->get("start");
        $rowperpage = $request->get("length"); // Rows display per page

        $columnIndex_arr = $request->get('order');
        $columnName_arr = $request->get('columns');
        $order_arr = $request->get('order');
        $search_arr = $request->get('search');

        $columnIndex = $columnIndex_arr[0]['column']; // Column index
        $columnName = $columnName_arr[$columnIndex]['data']; // Column name
        $columnSortOrder = $order_arr[0]['dir']; // asc or desc
        $searchValue = $search_arr['value']; // Search value

        // Total records
        $totalRecords = DB::table('saidaview')->select('count(*) as allcount')->count();
        $totalRecordswithFilter = DB::table('saidaview')->select('count(*) as allcount')->where('designacao', 'like', '%' . $searchValue . '%')->count();

        // Fetch records
        $records =  DB::table('saidaview')->orderBy($columnName, $columnSortOrder)
            ->where('saidaview.designacao', 'like', '%' . $searchValue . '%')
            ->select('saidaview.*')
            ->skip($start)
            ->take($rowperpage)
            ->get();

        $data_arr = array();

        foreach ($records as $record) {
            $designacao = $record->designacao;
            $id_produto = "$record->id_produto - $record->id_ordem";
            $cliente = $record->cliente;
            $solicitante = $record->solicitante;
            $operador = $record->operador;
            $data = date("d/m/Y", strtotime($record->data));
            $familia = $record->familia;
            $subfamilia = $record->subfamilia;
            $link = "<a href='/movimentos/show_saida/$record->id_saida'> Ver Mais &nbsp<i class='fa fa-arrow-right'></i></a>";

            $data_arr[] = array(
                "designacao" => $designacao,
                "id_produto" => $id_produto,
                "cliente" => $cliente,
                "solicitante" => $solicitante,
                "operador" => $operador,
                "data" => $data,
                "familia" => $familia,
                "subfamilia" => $subfamilia,
                "link" => $link,
            );
        }

        $response = array(
            "draw" => intval($draw),
            "iTotalRecords" => $totalRecords,
            "iTotalDisplayRecords" => $totalRecordswithFilter,
            "aaData" => $data_arr
        );

        echo json_encode($response);
        exit;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeSaida()
    {
        //VALIDAÇÂO
        request()->validate([
            'cliente' => 'required',
            'produto' => 'required',
            'n_ordem_tmp' => 'required',
            'solicitante' => 'required',
        ]);

        //ADD NA BD
        $Saida = new Saida();
        $Saida->id_cliente = request('cliente');
        $Saida->id_produto = request('produto');
        $Saida->id_ordem = request('n_ordem_tmp');
        $Saida->id_solicitante = request('solicitante');
        $Saida->id_operador = 1;
        $Saida->obs = request('obvs');
        $Saida->save();
        
        return redirect('movimentos/saida');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Movimento  $movimentos
     * @return \Illuminate\Http\Response
     */
    public function show(Entrada $entrada)
    {

        return view('movimentos.show_entrada', compact('entrada'));
    }
    public function sshow(Saida $saida)
    {

        return view('movimentos.show_saida', compact('saida'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Movimento  $movimentos
     * @return \Illuminate\Http\Response
     */
    public function edit(Movimento $movimentos)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Movimento  $movimentos
     * @return \Illuminate\Http\Response
     */
    public function update(Movimento $movimentos)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Movimento  $produtos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movimento $produtos)
    {
    }
}

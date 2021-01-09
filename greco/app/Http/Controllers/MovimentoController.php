<?php

namespace App\Http\Controllers;

use App\Models\Movimento;
use App\Models\Entrada;
use App\Models\Saida;
use App\Models\Produto;
use App\Models\sub_familia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MovimentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /* $entradas = Entrada::orderBy('created_at','desc')->take(5)->get();
        $saidas = Saida::orderBy('created_at', 'desc')->take(5)->get(); */
        $subfamilias = sub_familia::all();
        return view('movimentos.historico', compact(/* 'entradas', 'saidas',  */'subfamilias'));
    }

    /*
   AJAX request (Páginação com datatables)
   */
    public function getMovimentos(Request $request)
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
        $totalRecords = Movimento::select('count(*) as allcount')->count();
        $totalRecordswithFilter = Movimento::select('count(*) as allcount')->where('designacao', 'like', '%' . $searchValue . '%')->count();

        // Fetch records ISTO NÃO FUNCIONA por causa das relações complexas
        $records = Movimento::orderBy($columnName, $columnSortOrder)
            ->where('entradaview.designacao', 'like', '%' . $searchValue . '%')
            ->select('entradaview.*')
            ->skip($start)
            ->take($rowperpage)
            ->get();

        $data_arr = array();

        foreach ($records as $record) {
            $designacao = $record->designacao;
            $produto_id = "$record->produto_id - $record->id_ordem";
            $movimento = "Entrada";
            $localizacao = $record->armario + $record->prateleira;
            $capacidade = $record->capacidade;
            $unidade = $record->unidade;
            $cliente = $record->cliente;
            $fornecedor = $record->fornecedor;
            $data_entrada = $record->data_entrada;
            $data_validade = $record->data_validade;
            $data_termino = $record->data_termino;
            $operador = $record->operador;
            $familia = $record->familia;
            $sub_familias = $record->subfamilia;
            $link = "<a href='/ficha/$record->id'> Ver Mais &nbsp<i class='fa fa-arrow-right'></i></a>";

            $data_arr[] = array(
                "designacao" => $designacao,
                "movimento" => $movimento,
                "produto_id" => $produto_id,
                "localizacao" => $localizacao,
                "capacidade" => "$capacidade $unidade",
                "cliente" => $cliente,
                "fornecedor" => $fornecedor,
                "data_entrada" => $data_entrada,
                "data_validade" => $data_validade,
                "data_termino" => $data_termino,
                "operador" => $operador,
                "familia" => $familia,
                "sub_familias" => $sub_familias,
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
    public function store()
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Movimento  $movimentos
     * @return \Illuminate\Http\Response
     */
    public function show(Movimento $movimentos)
    {
        //
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

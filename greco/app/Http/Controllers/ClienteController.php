<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Responsavel;
use App\Models\Solicitante;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class ClienteController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('clientes.index');
    }

    /*
   AJAX request (Páginação com datatables)
   */
    public function getClientes(Request $request)
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
        $totalRecords = Cliente::select('count(*) as allcount')->count();
        $totalRecordswithFilter = Cliente::select('count(*) as allcount')
            ->where('designacao', 'ilike', '%' . $searchValue . '%')
            ->orWhere('created_at', 'ilike', '%' . $searchValue . '%')->count();

        // Fetch records
        $records = Cliente::orderBy($columnName, $columnSortOrder)
            ->where('clientes.designacao', 'ilike', '%' . $searchValue . '%')
            ->orWhere('clientes.created_at', 'ilike', '%' . $searchValue . '%')
            ->select('clientes.*')
            ->skip($start)
            ->take($rowperpage)
            ->get();

        $data_arr = array();

        foreach ($records as $record) {
            $id = "<a href='/clientes/$record->id'> Ver Mais &nbsp<i class='fa fa-arrow-right'></i></a>";
            $designacao = $record->designacao;
            $created_at = date('d/m/Y', strtotime($record->created_at));

            $data_arr[] = array(
                "id" => $id,
                "designacao" => $designacao,
                "created_at" => $created_at,
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
     * Display the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */

    public function show(Cliente $cliente)
    {
        $responsaveis = Responsavel::where('id_cliente', $cliente->id)->get();
        $solicitantes = Solicitante::where('id_cliente', $cliente->id)->get();
        return view('clientes.show',compact('cliente','responsaveis','solicitantes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientes.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $Cliente = new Cliente();
        $Cliente->designacao = request('designacao');
        $Cliente->obs = request('obvs');
        $Cliente->save();

        $data_r = request('responsaveis');
        $data_r_ex = explode(",", $data_r);
        $id_cliente = Cliente::all()->last()->id;

        foreach ($data_r_ex as $d) {
            $Responsavel = new Responsavel();
            $Responsavel->id_cliente = $id_cliente;
            $Responsavel->nome = explode(" | ", $d)[0];
            $Responsavel->email = explode(" | ", $d)[1];
            $Responsavel->save();
        }

        $data_s = request('solicitantes');
        $data_s_ex = explode(",", $data_s);

        foreach ($data_s_ex as $d) {
            $Solicitante = new Solicitante();
            $Solicitante->id_cliente = $id_cliente;
            $Solicitante->nome = explode(" | ", $d)[0];
            $Solicitante->email = explode(" | ", $d)[1];
            $Solicitante->save();
        }

        return redirect('clientes');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cliente  $fornecedor
     * @return \Illuminate\Http\Response
     */
    public function edit(Cliente $cliente)
    {
        $responsaveis = Responsavel::where('id_cliente', $cliente->id)->get();
        $solicitantes = Solicitante::where('id_cliente', $cliente->id)->get();
        return view('clientes.editar',compact('cliente','responsaveis','solicitantes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cliente $Cliente)
    {
        // dd($request->all());
        //VALIDAÇÂO
        $validar = Validator::make($request->all(), [
            'designacao' => 'required',
            
        ]);

        if ($validar->fails()) {
            return redirect()->back()->withErrors($validar)->withInput();
        }else{

        $Cliente = Cliente::find(request('id'));
        $Cliente->designacao = request('designacao');
        $Cliente->responsavel = request('responsavel');
        $Cliente->solicitante = request('solicitante');
        $Cliente->obs = request('obvs');
        $Cliente->save();
        $data_r = request('responsaveis');
        $data_r_ex = explode(",", $data_r);
        $id_cliente = Cliente::all()->last()->id;

        foreach ($data_r_ex as $d) {
            $Responsavel = Responsavel::find(request('id'));
            $Responsavel->id_cliente = $id_cliente;
            $Responsavel->nome = explode(" | ", $d)[0];
            $Responsavel->email = explode(" | ", $d)[1];
            $Responsavel->save();
        }

        $data_s = request('solicitantes');
        $data_s_ex = explode(",", $data_s);

        foreach ($data_s_ex as $d) {
            $Solicitante = Solicitante::find(request('id'));
            $Solicitante->id_cliente = $id_cliente;
            $Solicitante->nome = explode(" | ", $d)[0];
            $Solicitante->email = explode(" | ", $d)[1];
            $Solicitante->save();
        }

        return redirect('clientes/'. $Cliente->id);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cliente $cliente)
    {
    }
}

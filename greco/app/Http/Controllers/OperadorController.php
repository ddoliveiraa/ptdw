<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Perfil;
use App\Models\Operador;
use App\Models\Historico_Operador;
use Illuminate\Support\Facades\Validator;

class OperadorController extends Controller
{
    public function index()
    {
        return view('operadores.index');
    }

    /*
   AJAX request (Páginação com datatables)
   */
    public function getOperadores(Request $request)
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
        $totalRecords = Operador::select('count(*) as allcount')->count();
        $totalRecordswithFilter = Operador::select('count(*) as allcount')
            ->where('nome', 'ilike', '%' . $searchValue . '%')
            ->orWhere('email', 'ilike', '%' . $searchValue . '%')
            ->orWhere('perfil', 'ilike', '%' . $searchValue . '%')
            ->orWhere('operadors.data_criacao', 'ilike', '%' . $searchValue . '%')
            ->orWhere('operadors.data_desativacao', 'ilike', '%' . $searchValue . '%')->count();

        // Fetch records
        $records = Operador::orderBy($columnName, $columnSortOrder)
            ->where('operadors.nome', 'ilike', '%' . $searchValue . '%')
            ->orWhere('operadors.email', 'ilike', '%' . $searchValue . '%')
            ->orWhere('operadors.perfil', 'ilike', '%' . $searchValue . '%')
            ->orWhere('operadors.data_criacao', 'ilike', '%' . $searchValue . '%')
            ->orWhere('operadors.data_desativacao', 'ilike', '%' . $searchValue . '%')
            ->select('operadors.*')
            ->skip($start)
            ->take($rowperpage)
            ->get();

        $data_arr = array();

        foreach ($records as $record) {
            $id = "<a href='/operadores/$record->id'> Ver Mais &nbsp<i class='fa fa-arrow-right'></i></a>";
            $nome = $record->nome;
            $email = $record->email;
            $perfil = $record->get_perfil->nome;
            $data_criacao = date('d/m/Y', strtotime($record->data_criacao));
            if (empty($record->data_desativacao)) {
                $data_desativacao = $record->data_desativacao;
            } else {
                $data_desativacao = date('d/m/Y', strtotime($record->data_desativacao));
            }


            $data_arr[] = array(
                "id" => $id,
                "nome" => $nome,
                "email" => $email,
                "perfil" => $perfil,
                'data_criacao' => $data_criacao,
                'data_desativacao' => $data_desativacao,
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

    public function getOperadoresHistorico(Request $request)
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
        $totalRecords = Historico_Operador::select('count(*) as allcount')->count();
        $totalRecordswithFilter = Historico_Operador::select('count(*) as allcount')
            ->where('historico_operadores.operador', 'ilike', '%' . $searchValue . '%')
            ->orWhere('historico_operadores.operacao', 'ilike', '%' . $searchValue . '%')
            ->orWhere('historico_operadores.data', 'ilike', '%' . $searchValue . '%')
            ->count();

        // Fetch records
        $records = Historico_Operador::orderBy($columnName, $columnSortOrder)
            ->where('historico_operadores.operador', 'ilike', '%' . $searchValue . '%')
            ->orWhere('historico_operadores.operacao', 'ilike', '%' . $searchValue . '%')
            ->orWhere('historico_operadores.data', 'ilike', '%' . $searchValue . '%')
            ->select('historico_operadores.*')
            ->skip($start)
            ->take($rowperpage)
            ->get();

        $data_arr = array();

        foreach ($records as $record) {
            $operador = $record->get_operador->nome;
            $perfil = $record->get_operador->get_perfil->nome;
            $operacao = $record->get_operacao->operacao;
            $data = date('d/m/Y', strtotime($record->data));
            if($operacao == "Registo Entrada"){
                $id = "<a href='/movimentos/show_entrada/$record->id_registo'> Ver Mais &nbsp<i class='fa fa-arrow-right'></i></a>";
            } else {
                $id = "<a href='/movimentos/show_saida/$record->id_registo'> Ver Mais &nbsp<i class='fa fa-arrow-right'></i></a>";
            }

            $data_arr[] = array(
                "operador" => $operador,
                "perfil" => $perfil,
                "operacao" => $operacao,
                'data' => $data,
                "id" => $id,
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
     * @param  \App\Models\Operador  $operador
     * @return \Illuminate\Http\Response
     */

    public function show(Operador $operador)
    {
        return view('operadores.show', compact('operador'));
    }

    public function getOperadoresShow(Request $request)
    {
        $operador_id = $request->get('operador_id');

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
        $totalRecords = Historico_Operador::select('count(*) as allcount')->count();
        $totalRecordswithFilter = Historico_Operador::select('count(*) as allcount')
            ->where('operador', '=', $operador_id)
            ->count();

        // Fetch records
        $records = Historico_Operador::orderBy($columnName, $columnSortOrder)
            ->where('operador', '=', $operador_id)
            ->select('*')
            ->skip($start)
            ->take($rowperpage)
            ->get();

        $data_arr = array();

        foreach ($records as $record) {
            $operacao = $record->get_operacao->operacao;
            $data = date('d/m/Y', strtotime($record->data));
            if($operacao == "Registo Entrada"){
                $id = "<a href='/movimentos/show_entrada/$record->id_registo'> Ver Mais &nbsp<i class='fa fa-arrow-right'></i></a>";
            } else {
                $id = "<a href='/movimentos/show_saida/$record->id_registo'> Ver Mais &nbsp<i class='fa fa-arrow-right'></i></a>";
            }
            
            
            $data_arr[] = array(
                "operacao" => $operacao,
                'data' => $data,
                "id" => $id,
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
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        $perfis = Perfil::all();
        return view('operadores.add', compact('perfis'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addOperador(Request $request)
    {
        //VALIDAÇÂO
        $validator = Validator::make($request->all(), [
            'nome_operador' => 'required',
            'email_operador' => 'required|email',
            'perfil_operador' => 'required',
            'data_criacao_input' => ['required', 'date_format:d/m/Y'],
        ]);

        if ($validator->fails()) {
            return redirect('operadores/add')->with('status', 'erro')->withErrors($validator)->withInput();
        }else{
            //ADD NA BD
            $Operador = new Operador();
            $Operador->nome = request('nome_operador');
            $Operador->email = request('email_operador');
            $Operador->perfil = request('perfil_operador');
            $Operador->data_criacao = request('data_criacao_input');
            $Operador->obs = request('obvs');
            $Operador->save();

            return redirect('operadores/add')->with('status', 'ok');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Operador  $operador
     * @return \Illuminate\Http\Response
     */
    public function edit(Operador $operador)
    {
        $perfis = Perfil::all();
        return view('operadores.editar', compact('operador', 'perfis'));
    }

    


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Operador  $operador
     * @return \Illuminate\Http\Response
     */
    public function updateOperador(Request $request, Operador $Operador)
    {
        // dd($request->all());
        //VALIDAÇÂO
        $validator = Validator::make($request->all(), [
            'nome_operador' => 'required',
            'email_operador' => 'required|email',
            'perfil_operador' => 'required',
            'data_criacao_input' => ['date_format:d/m/Y', 'before_or_equal:today'],
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }else{
        //ADD NA BD
        $Operador = Operador::find(request('id'));
        $Operador->nome = request('nome_operador');
        $Operador->email = request('email_operador');
        $Operador->perfil = request('perfil_operador');
        $Operador->data_criacao = request('data_criacao_input');
        $Operador->obs = request('obvs');
        $Operador->save();

        return redirect('operadores/' . $Operador->id)->with('status', 'ok');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Operador  $operador
     * @return \Illuminate\Http\Response
     */
    public function destroy(Operador $operador)
    {
    }
}

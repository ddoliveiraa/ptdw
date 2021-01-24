<?php

namespace App\Http\Controllers;

use App\Models\Fornecedor;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FornecedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('fornecedores.index');
    }
    /*
   AJAX request (Páginação com datatables Fornecedores)
   */
    public function getFornecedores(Request $request)
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
        $totalRecords = Fornecedor::select('count(*) as allcount')->count();
        $totalRecordswithFilter = Fornecedor::select('count(*) as allcount')
            ->where('designacao', 'like', '%' . $searchValue . '%')
            ->orWhere('morada', 'like', '%' . $searchValue . '%')
            ->orWhere('localidade', 'like', '%' . $searchValue . '%')
            ->orWhere('codigopostal', 'like', '%' . $searchValue . '%')
            ->orWhere('telefone', 'like', '%' . $searchValue . '%')
            ->orWhere('NIF', 'like', '%' . $searchValue . '%')
            ->orWhere('email', 'like', '%' . $searchValue . '%')
            ->count();

        // Fetch records
        $records = Fornecedor::orderBy($columnName, $columnSortOrder)
            ->where('designacao', 'like', '%' . $searchValue . '%')
            ->orWhere('morada', 'like', '%' . $searchValue . '%')
            ->orWhere('localidade', 'like', '%' . $searchValue . '%')
            ->orWhere('codigopostal', 'like', '%' . $searchValue . '%')
            ->orWhere('telefone', 'like', '%' . $searchValue . '%')
            ->orWhere('NIF', 'like', '%' . $searchValue . '%')
            ->orWhere('email', 'like', '%' . $searchValue . '%')
            ->select('*')
            ->skip($start)
            ->take($rowperpage)
            ->get();

        $data_arr = array();

        foreach ($records as $record) {
            $designacao = $record->designacao;
            $morada = $record->morada;
            $localidade = $record->localidade;
            $codigopostal = $record->codigopostal;
            $telefone = $record->telefone;
            $NIF = $record->NIF;
            $email = $record->email;
            $id = "<a href='".public_path()."/fornecedores/$record->id'> Ver Mais &nbsp<i class='fa fa-arrow-right'></i></a>";

            $data_arr[] = array(
                "designacao" => $designacao,
                "morada" => $morada,
                "localidade" => $localidade,
                "codigopostal" => $codigopostal,
                "telefone" => $telefone,
                "email" => $email,
                "NIF" => $NIF,
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fornecedores.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //VALIDAÇÂO
        $validator = Validator::make($request->all(), [
            'fornecedor_designacao' => 'required',
            'fornecedor_email' => 'required|email',
            'fornecedor_telefone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:9',
            'fornecedor_localidade' => 'required',
            'fornecedor_nif'=> 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:9|max:9',
            'fornecedor_codigopostal' => 'required|regex:/^\d{4}(-\d{3})?$/',
            'fornecedor_rua' => 'required',
            'fornecedor_numero' => 'required',
            'fornecedor_nomevendedor1' => 'required',
            'fornecedor_telemovelvendedor1' => 'nullable|regex:/^([0-9\s\-\+\(\)]*)$/|min:9',
            'fornecedor_emailvendedor1' => 'required',
            'fornecedor_nomevendedor2' => 'required',
            'fornecedor_emailvendedor2' => 'required',
            'fornecedor_telemovelvendedor2' => 'nullable|regex:/^([0-9\s\-\+\(\)]*)$/|min:9'
        ]);

        if ($validator->fails()) {
            return redirect('fornecedores/add')->with('status', 'erro')->withErrors($validator)->withInput();
        }else{
            //ADD NA BD
            $Fornecedor = new Fornecedor();
            $Fornecedor->designacao = request('fornecedor_designacao');
            $Fornecedor->morada = request('fornecedor_rua') . " " . request('fornecedor_numero') . " " . request('fornecedor_lote');
            $Fornecedor->localidade = request('fornecedor_localidade');
            $Fornecedor->codigopostal = request('fornecedor_codigopostal');
            $Fornecedor->telefone = request('fornecedor_telefone');
            $Fornecedor->NIF = request('fornecedor_nif');
            $Fornecedor->email = request('fornecedor_email');
            $Fornecedor->condicoes_especiais = request('fornecedor_condicoesespeciais');
            $Fornecedor->vendedor1 = request('fornecedor_nomevendedor1');
            $Fornecedor->telefone1 = request('fornecedor_telemovelvendedor1');
            $Fornecedor->email1 = request('fornecedor_emailvendedor1');
            $Fornecedor->vendedor2 = request('fornecedor_nomevendedor2');
            $Fornecedor->telefone2 = request('fornecedor_telemovelvendedor2');
            $Fornecedor->email2 = request('fornecedor_emailvendedor2');
            $Fornecedor->obs = request('fornecedor_observacoes');
            $Fornecedor->save();
            
            return redirect('fornecedores/add')->with('status', 'ok');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fornecedor  $fornecedor
     * @return \Illuminate\Http\Response
     */

    public function show(Fornecedor $fornecedor)
    {
        return view('fornecedores.show',compact('fornecedor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fornecedor  $fornecedor
     * @return \Illuminate\Http\Response
     */
    public function edit(Fornecedor $fornecedor)
    {
        return view('fornecedores.editar',compact('fornecedor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fornecedor  $fornecedor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fornecedor $Fornecedor)
    {
        // dd($request->all());
        //VALIDAÇÂO
        $validator = Validator::make($request->all(), [
            'fornecedor_designacao' => 'required',
            'fornecedor_telefone' => 'required|regex:/^\(\d{2,3}\)\s\d{4}\-\d{3}$/',
            'fornecedor_morada' => 'required',
            'fornecedor_localidade' => 'required|regex:/^[A-Za-z]+$/',
            'fornecedor_codigopostal' => 'required|regex:/^\d{4}(-\d{3})?$/',
            'fornecedor_email' => 'required|email',
            'fornecedor_nif' => 'required|regex:/^[0-9]+$/',
            'fornecedor_condicoesespeciais' => 'required',
            'fornecedor_nomevendedor1' => 'required',
            'fornecedor_emailvendedor1' => 'required|email',
            'fornecedor_telemovelvendedor1' => 'required|regex:/^\(\d{2,3}\)\s\d{4}\-\d{3}$/',
            'fornecedor_nomevendedor2' => 'required',
            'fornecedor_emailvendedor2' => 'required|email',
            'fornecedor_telemovelvendedor2' => 'required|regex:/^\(\d{2,3}\)\s\d{4}\-\d{3}$/',

        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }else{
        //ADD NA BD
        $Fornecedor = Fornecedor::find(request('id'));
        $Fornecedor->designacao = request('fornecedor_designacao');
        $Fornecedor->telefone = request('fornecedor_telefone');
        $Fornecedor->morada = request('fornecedor_morada');
        $Fornecedor->localidade = request('fornecedor_localidade');
        $Fornecedor->codigopostal = request('fornecedor_codigopostal');
        $Fornecedor->email = request('fornecedor_email');
        $Fornecedor->NIF = request('fornecedor_nif');
        $Fornecedor->obs = request('obvs');
        $Fornecedor->condicoes_especiais = request('fornecedor_condicoesespeciais');
        $Fornecedor->vendedor1 = request('fornecedor_nomevendedor1');
        $Fornecedor->email1 = request('fornecedor_emailvendedor1');
        $Fornecedor->telefone1 = request('fornecedor_telemovelvendedor1');
        $Fornecedor->vendedor2 = request('fornecedor_nomevendedor2');
        $Fornecedor->email2 = request('fornecedor_emailvendedor2');
        $Fornecedor->telefone2 = request('fornecedor_telemovelvendedor2');
        $Fornecedor->save();

        return redirect('fornecedores/' . $Fornecedor->id)->with('status', 'ok');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fornecedor  $fornecedor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fornecedor $fornecedor)
    {
    }
}

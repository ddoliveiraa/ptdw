<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use App\Models\Entrada;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\condicoes_armazenamento;
use App\Models\sub_familia;
use App\Models\pictograma;
use App\Models\recomendacoe;
use App\Models\advertencia;
use Carbon;
use Illuminate\Support\Facades\Validator;


class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function storeQuimico(Request $request){

        //VALIDAÇÂO
        $validator = Validator::make($request->all(), [
            'produto_designacao' => 'required',
            'produto_cas' => 'required',
            'produto_peso' => 'required',
            'produto_stock_minimo' => 'required',
            'produto_pictogramas' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect('produtos/add')->withErrors($validator)->withInput();
        }else{
            //ADD NA BD
            $Produto = new Produto();
            $Produto->familia = 1;
            $Produto->designacao = request('produto_designacao');
            $Produto->formula = request('produto_formula');
            $Produto->CAS = request('produto_cas');
            $Produto->peso_molecular = request('produto_peso');
            $Produto->stock_min = request('produto_stock_minimo');
            $Produto->condicoes_armazenamento = request('produto_armario');
            $Produto->ventilado = request('customSwitch1');
            
            $Produto->save();

            $ids_pictogramas = request('ids_pictogramas');
            $ids_recomendacoes = request('ids_recomendacoes');
            $ids_advertencias = request('ids_advertencias');

            //attachments pictogramas
            if($ids_pictogramas != null){
                $ids_pictogramas_array = explode(',',$ids_pictogramas); //array
                foreach ($ids_pictogramas_array as $pid){    
                    $Produto->pictogramas()->attach($pid);
                }
            }
            //attachments recomendações
            if($ids_recomendacoes != null){
                $ids_recomendacoes_array = explode(',',$ids_recomendacoes); //array
                foreach ($ids_recomendacoes_array as $rid){    
                    $Produto->recomendacoes()->attach($rid);
                }
            }
            //attachments advertencias
            if($ids_advertencias != null){
                $ids_advertencias_array = explode(',',$ids_advertencias); //array
                foreach ($ids_advertencias_array as $aid){    
                    $Produto->advertencias()->attach($aid);
                }
            }

            return redirect('produtos/add')->with('status', 'ok');
        }

        
        
    }

    public function updateProdutoQ(Request $request, Produto $Produto)
    {

        //VALIDAÇÂO
        $validator = Validator::make($request->all(), [
            'produto_designacao' => 'required',
            'produto_cas' => 'required',
            'produto_peso' => 'required|regex:/^[0-9]{1,3}(,[0-9]{3})*(\.[0-9]+)*$/',
            'produto_stock_minimo' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect('ficha/editar/' . $Produto->id)->withErrors($validator)->withInput();
        }else{
        //ADD NA BD

        $Produto = Produto::find(request('id'));
        $Produto->familia = 1;
        $Produto->designacao = request('produto_designacao');
        $Produto->formula = request('produto_formula');
        //$Produto->sinonimo = request('produto_sinonimo');
        $Produto->CAS = request('produto_cas');
        $Produto->peso_molecular = request('produto_peso');
        $Produto->stock_min = request('produto_stock_minimo');
        $Produto->condicoes_armazenamento = request('produto_armazenamento');
        $Produto->ventilado = request('customSwitch1');

        $Produto->save();

        $ids_pictogramas = request('ids_pictogramas'); // 3, 5, 7
        $ids_pictogramas_array = explode(',', $ids_pictogramas); //array
        $ids_recomendacoes = request('ids_recomendacoes');
        $ids_recomendacoes_array = explode(',', $ids_recomendacoes); //array
        $ids_advertencias = request('ids_advertencias');
        $ids_advertencias_array = explode(',', $ids_advertencias); //array

        //attachments pictogramas
        if ($ids_pictogramas_array != null) {
            $Produto->pictogramas()->sync($ids_pictogramas_array);
        }
        //attachments recomendações
        if ($ids_recomendacoes_array != null) {
            $Produto->recomendacoes()->sync($ids_recomendacoes_array);
        }
        //attachments advertencias
        if ($ids_advertencias_array != null) {
            $Produto->advertencias()->sync($ids_advertencias_array);
        }

        return redirect('ficha/' . $Produto->id);
        }
    }

    public function storeNaoQuimico(Request $request){
        
        //VALIDAÇÂO
        $validator = Validator::make($request->all(), [
            'produto_designacao_nq' => 'required',
            'produto_stock_minimo_nq' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect('produtos/add')->withErrors($validator)->withInput();
        }else{
            //ADD NA BD
            $Produto = new Produto();
            $Produto->familia = 2;
            $Produto->designacao = request('produto_designacao_nq');
            $Produto->foto = request('produto_foto');
            $Produto->sub_familia = request('produto_subfamilia_nq');
            $Produto->stock_min = request('produto_stock_minimo_nq');
            $Produto->save();

            return redirect('produtos/add')->with('status', 'ok');
        }
    }

    public function updateProdutoNQ(Request $request, Produto $Produto)
    {
        //dump(request()->all());
        //VALIDAÇÂO
        $validator = Validator::make($request->all(), [
            'produto_designacao' => 'required',
            'produto_stock_minimo' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect('/ficha/editar_nq/'. $Produto->id)->withErrors($validar)->withInput();
        }else{
        //ADD NA BD

        $Produto = Produto::find(request('id'));
        $Produto->familia = 2;
        $Produto->designacao = request('produto_designacao');
        $Produto->stock_min = request('produto_stock_minimo');

        $Produto->save();

        return redirect('ficha/' . $Produto->id);
    }
}

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('produtos.produtos');
    }

    /*
   AJAX request (Páginação com datatables)
   */
    public function getProdutos(Request $request)
    {

        $tipo = $request->get("tipo");

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

        if ($tipo == "quimico") {
            // Total records
            $totalRecords = Produto::select('count(*) as allcount')->count();

            $totalRecordswithFilter = Produto::where('familia', '=', 1)->select('count(*) as allcount')->where(function ($query) use ($searchValue) {
                $query->where('designacao', 'ilike', '%' . $searchValue . '%')
                    ->orWhere('produtos.formula', 'ilike', '%' . $searchValue . '%')
                    ->orWhere('produtos.CAS', 'ilike', '%' . $searchValue . '%');
            })->count();

            // Fetch records
            $records = Produto::where('familia', '=', 1)->orderBy($columnName, $columnSortOrder)->where(function ($query) use ($searchValue) {
                $query->where('produtos.designacao', 'ilike', '%' . $searchValue . '%')
                    ->orWhere('produtos.formula', 'ilike', '%' . $searchValue . '%')
                    ->orWhere('produtos.CAS', 'ilike', '%' . $searchValue . '%');
            })->select('produtos.*')
                ->skip($start)
                ->take($rowperpage)
                ->get();
        } else if ($tipo == "naoquimico") {
            // Total records
            $totalRecords = Produto::select('count(*) as allcount')->count();

            $totalRecordswithFilter = Produto::where('familia', '=', 2)->select('count(*) as allcount')->where(function ($query) use ($searchValue) {
                $query->where('designacao', 'ilike', '%' . $searchValue . '%');
            })->count();

            // Fetch records
            $records = Produto::where('familia', '=', 2)->orderBy($columnName, $columnSortOrder)->where(function ($query) use ($searchValue) {
                $query->where('produtos.designacao', 'ilike', '%' . $searchValue . '%');
            })->select('produtos.*')
                ->skip($start)
                ->take($rowperpage)
                ->get();
        } else {
            // Total records
            $totalRecords = Produto::select('count(*) as allcount')->count();
            $totalRecordswithFilter = Produto::select('count(*) as allcount')
                ->where('designacao', 'ilike', '%' . $searchValue . '%')
                ->orWhere('produtos.formula', 'ilike', '%' . $searchValue . '%')
                ->orWhere('produtos.CAS', 'ilike', '%' . $searchValue . '%')->count();

            // Fetch records
            $records = Produto::orderBy($columnName, $columnSortOrder)
                ->where('produtos.designacao', 'ilike', '%' . $searchValue . '%')
                ->orWhere('produtos.formula', 'ilike', '%' . $searchValue . '%')
                ->orWhere('produtos.CAS', 'ilike', '%' . $searchValue . '%')
                ->orWhere('produtos.familia', 'ilike', '%' . $searchValue . '%')
                ->select('produtos.*')
                ->skip($start)
                ->take($rowperpage)
                ->get();
        }



        $data_arr = array();

        foreach ($records as $record) {
            $id = "<a href='/ficha/$record->id'> Ver Mais &nbsp<i class='fa fa-arrow-right'></i></a>";
            $designacao = $record->designacao;
            $formula = $record->formula;
            $CAS = $record->CAS;
            $familia = $record->get_fam->nome;
            $stock = $record->stock;
            $stock_min = $record->stock_min;

            $data_arr[] = array(
                "id" => $id,
                "designacao" => $designacao,
                "formula" => $formula,
                "CAS" => $CAS,
                'familia' => $familia,
                'stock' => $stock,
                'stock_min' => $stock_min
            );
        }

        $response = array(
            "draw" => intval($draw),
            "iTotalRecords" => $totalRecords,
            "iTotalDisplayRecords" => $totalRecordswithFilter,
            "aaData" => $data_arr,
            "tipo" => $tipo,
        );

        echo json_encode($response);
        exit;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        $condicoes = condicoes_armazenamento::all();
        $subfamilias = sub_familia::all();
        $pictogramas = pictograma::all();
        $recomendacoes = recomendacoe::all();
        $advertencias = advertencia::all();

        return view('produtos.add', [
            'condicoes' => $condicoes,
            'subfamilias' => $subfamilias,
            'pictogramas' => $pictogramas,
            'recomendacoes' => $recomendacoes,
            'advertencias' => $advertencias
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produto  $produtos
     * @return \Illuminate\Http\Response
     */

    public function show(Produto $produto)
    {
        $time = Carbon\Carbon::now();
        $entradas = Entrada::where('id_inventario', $produto->id)->get();
        return view('ficha.show', compact('produto', 'entradas', 'time'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produto  $produtos
     * @return \Illuminate\Http\Response
     */
    public function edit(Produto $produtos)
    {
        $pictogramas = pictograma::all();
        $recomendacoes = recomendacoe::all();
        $advertencias = advertencia::all();
        $condicoes = condicoes_armazenamento::all();
        return view('ficha.editar', compact('produtos', 'pictogramas', 'recomendacoes', 'advertencias', 'condicoes'));
    }

    public function edit_nq(Produto $produtos)
    {
        return view('ficha.editar_nq', compact('produtos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produto  $produtos
     * @return \Illuminate\Http\Response
     */
    public function update(Produto $produtos)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produto  $produtos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produto $produtos)
    {
    }
}

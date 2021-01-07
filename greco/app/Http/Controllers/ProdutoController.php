<?php

namespace App\Http\Controllers;
use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    /*
    public function __construct()
    {
        $this->middleware('auth');
    }*/

    public function addProdutoQ(){

        //TESTES
        dump(request()->all());

        //VALIDAÇÂO
        request()->validate([
            'produto_designacao' => 'required',
            'produto_sinonimo' => 'required'
        ]);

        //ADD NA BD
        $Produto = new Produto();
        $Produto->designacao = request('produto_designacao');
        $Produto->sinonimo = request('produto_sinonimo');
        $Produto->formula = request('produto_designacao');
        $Produto->CAS = request('produto_cas');
        $Produto->peso_molecular = request('produto_peso');
        $Produto->stock_min = request('produto_stock_minimo');
        
        $Produto->save();
        
        //VOLTAR A PRODUTOS
        return redirect('produtos.produtos');
    }

    public function addProdutoNQ(){

        //^^
        return redirect('produtos.produtos');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produtos = Produto::all();
        return view('produtos.produtos', compact('produtos'));
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
     * @param  \App\Models\Produto  $produtos
     * @return \Illuminate\Http\Response
     */
    public function show(Produto $produtos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produto  $produtos
     * @return \Illuminate\Http\Response
     */
    public function edit(Produto $produtos)
    {

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

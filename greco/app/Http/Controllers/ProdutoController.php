<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//use Illuminate\Support\Facades\Auth;
use App\Models\Produto;

class ProdutoController extends Controller
{

    public function __construct()
    {
        //$this->middleware('auth');
    }

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
}

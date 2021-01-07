<?php

namespace App\Http\Controllers;
use App\Models\Movimento;
use App\Models\Entrada;
use App\Models\Saida;
use App\Models\Produto;
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
        $entradas = Entrada::all();
        $saidas = Saida::all();
        return view('movimentos.historico', compact('entradas', 'saidas'));
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

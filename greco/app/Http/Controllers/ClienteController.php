<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Responsavel;

class ClienteController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getSolicitantes(Request $request){
        if ($request->ajax()) {
            $responsaveis = $request->responsaveis;
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
    public function index()
    { 
        $responsaveis = Responsavel::all();
        return view('clientes.add', compact('responsaveis'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */

    public function show(Cliente $cliente)
    {
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
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cliente  $fornecedor
     * @return \Illuminate\Http\Response
     */
    public function edit(Cliente $cliente)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Cliente $cliente)
    {
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

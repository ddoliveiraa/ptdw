<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Responsavel;
use App\Models\Solicitante;

class ClienteController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
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
        $Cliente = new Cliente();
        $Cliente->designacao = request('designacao');
        $Cliente->obs = request('obvs');
        $Cliente->save();
        
        $data_r = request('responsaveis');
        $data_r_ex = explode(",",$data_r);
        $id_cliente = Cliente::all()->last()->id;

        foreach ($data_r_ex as $d) {
            $Responsavel = new Responsavel();
            $Responsavel->id_cliente = $id_cliente;
            $Responsavel->nome = explode(" | ",$d)[0];
            $Responsavel->email = explode(" | ",$d)[1];
            $Responsavel->save();
        }

        $data_s = request('solicitantes');
        $data_s_ex = explode(",",$data_s);
        
        foreach ($data_s_ex as $d) {
            $Solicitante = new Solicitante();
            $Solicitante->id_cliente = $id_cliente;
            $Solicitante->nome = explode(" | ",$d)[0];
            $Solicitante->email = explode(" | ",$d)[1];
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

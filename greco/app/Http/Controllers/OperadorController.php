<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Perfil;
use App\Models\Operador;

class OperadorController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $perfis = Perfil::all();  
        return view('operadores.add', compact('perfis'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addOperador(Request $request){
        //VALIDAÇÂO
        request()->validate([
            'nome_operador' => 'required',
            'email_operador' => 'required|email',
            'perfil_operador' => 'required',
            'data_criacao_input' => 'required',
        ]);
        //ADD NA BD
        $Operador = new Operador();
        $Operador->nome = request('nome_operador');
        $Operador->email = request('email_operador');
        $Operador->perfil = request('perfil_operador');
        $Operador->data_criacao = request('data_criacao_input');
        $Operador->obs = request('obvs');
        $Operador->save();
        
        return redirect('operadores');
    }
}

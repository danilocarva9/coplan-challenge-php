<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function index(){

        $clientes = Cliente::get();
        return view('clientes.lista', ['clientes'=>$clientes]);
    }

    public function novo(){
        return view('clientes.formulario');
    }

    public function salvar(Request $request){
        $cliente = new Cliente();
        if($request->nome == null or $request->sobrenome == null){
            \Session::flash('mensagem_erro', 'Preencha os campos obrigatórios!');
            return \Redirect::to('clientes/novo/');
        }else{
            $cliente = $cliente->create($request->all());

            \Session::flash('mensagem_sucesso', 'Cliente cadastrado com sucesso!');

            return \Redirect::to('clientes/');
        }
    }

    public function editar($id){
        $cliente = Cliente::findOrFail($id);

        return view('clientes.formulario', ['cliente' => $cliente]);
    }

    public function atualizar($id, Request $request){
        $cliente = Cliente::findOrFail($id);

        $cliente->update($request->all());

        \Session::flash('mensagem_sucesso', 'Cliente editado com sucesso!');

        return \Redirect::to('clientes/');
    }

    public function deletar($id){
        $cliente = Cliente::findOrFail($id);

        $cliente->delete();

        \Session::flash('mensagem_sucesso', 'Cliente deletado com sucesso!');

        return \Redirect::to('clientes/');
    }
}

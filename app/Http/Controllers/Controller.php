<?php

namespace App\Http\Controllers;

use App\usuarioModel;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function getIndex(){
        return view("welcome");
    }

    public function saveOrUpdate(Request $request){
        $usuarios = new usuarioModel;
        if($request->usuario_id){
            $usuarios = usuarioModel::find($request->usuario_id);
        }
        $usuarios->nome = $request->nome;
        $usuarios->sobrenome = $request->sobrenome;
        $usuarios->endereco = $request->endereco;
        $usuarios->cargo = $request->cargo;
        $result = $usuarios->saveOrFail();
        if($result){
            return response()->json(array('message'=>'Salvo com sucesso'));
        }else{
            return response()->json(array('message'=>'Falha ao salvar'));
        }
        return'it was called';
    }
    public function listar(){
        $listaUsuario = usuarioModel::all();
        return response()->json(array('data'=> $listaUsuario));
    }
    public function deletar(Request $request){
        $usuarios = usuarioModel::find($request->usuario_id);
        $usuarios->delete();
        return response()->json(array('message'=>'Deletado com sucesso'));
    }
}

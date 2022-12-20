<?php

namespace App\Http\Controllers;

use Symfony\Component\HttpFoundation\Request;

use App\Models\Usuario;


class UsuarioController extends Controller
{
    public function cadastrar(Request $request)
    {
        Usuario::create([
            'nome' => $request->nome,
            'telefone' => $request->telefone
        ]);

        echo 'Usuario cadastrado com sucesso';
    }


        public function listar(){
            $usuarios = Usuario::all();
            return view('welcome', ['usuarios' => $usuarios]);
        }



    public function selecionar($id){
        $usuario = Usuario::findOrFail($id);
        return view('editarUsuario', ['usuario' => $usuario]);
    }

    public function editar(Request $request, $id){
        $usuario = Usuario::findOrFail($id);

        $usuario->nome = $request->nome;
        $usuario->telefone = $request->telefone;
        $usuario->save();
        return 'Usuario editado com sucesso!!';
    }

    public function excluir(Request $request, $id){
        $usuario = Usuario::findOrFail($id);
        $usuario->delete();
        return 'Usuario editado com sucesso!!';
    }
}

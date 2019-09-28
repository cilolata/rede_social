<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Eventos;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    //retornando as infos do register para a pagina profile 
    public function profile($id){
        $usuario = User::find(auth()->user()->id);
        return view('profile')->with('usuario', $usuario);
    }

    //validando os dados do usuario pelo banco e editando o usuario na pagina profile
    public function alterarUsuario(Request $request) {
        $usuario = User::find(auth()->user()->id);
   
        $usuario->name = $request->input('name');
        $usuario->sobrenome = $request->input('sobrenome');
    //    $usuario->imagem = $request->input('imagem');
        // $usuario->email = $request->input('email');
        $usuario->cidade = $request->input('cidade');
        $usuario->estado = $request->input('estado');
        $usuario->CEP = $request->input('CEP');

        // salvando caminho da imagem e armazenando-a no projeto
        // capturando imagem selecionada pelo usuário
        $arquivo = $request->file('imagem');

        $nomePasta = "uploads_perfil";
        // capturando o caminho até o projeto
        $arquivo->storePublicly($nomePasta);

        // caminho absoluto que sempre será utilizado o mesmo
        $caminhoAbsoluto = public_path() . "/storage/$nomePasta";

        // capturando o tmp_name
        $nomeArquivo = $arquivo->getClientOriginalName();

        // capturando o caminho relativo dentro do projeto
        $caminhoRelativo = "storage/$nomePasta/$nomeArquivo";

        // movendo/armazenando imagem dentro do projeto
        $arquivo->move($caminhoAbsoluto, $nomeArquivo);

        $usuario->save();

        return redirect('/profile/'. $request->input('user_id'));
    }

    public function removerUsuario(Request $request){
        $id = $request->input('user_id');
        $usuario = User::find(auth()->user()->id);
        $eventos = Eventos::where('fk_users', '=', $id)->get();

        foreach($eventos as $evento):
            $evento->delete();
        endforeach;
        $usuario->delete();

        return redirect('/index');
    }
}

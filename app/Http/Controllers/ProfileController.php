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
      $usuario->email = $request->input('email');
        $usuario->cidade = $request->input('cidade');
        $usuario->estado = $request->input('estado');
        $usuario->CEP = $request->input('CEP');

       
        $request = request();

        $arquivo = $request->file('imagem');

        $nomePasta = "uploads_perfil";
        $arquivo->storePublicly($nomePasta);

        $caminhoAbsoluto = public_path() . "/storage/$nomePasta";

        $nomeArquivo = $arquivo->getClientOriginalName();

        $caminhoRelativo = "storage/$nomePasta/$nomeArquivo";

        $arquivo->move($caminhoAbsoluto, $nomeArquivo);

        $usuario->save();

        return redirect('/profile/'. $request->input('user_id'));
    }

    public function removerUsuario(Request $request){
       $id = $request->input('deletar');
       $usuario = User::find(auth()->user()->id);
       $eventos = Eventos::where('fk_users', '=', $id)->get();

    foreach($eventos as $evento):
       $evento->delete();
    endforeach;
      $usuario->delete();

      return redirect('/index');
    }
}

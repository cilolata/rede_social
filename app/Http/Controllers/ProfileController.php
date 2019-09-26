<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    //retornando as infos do register para a pagina profile 
    public function profile($id){
        $usuario = User::find($id);
        return view('profile')->with('usuario', $usuario);
    }

    //validando os dados do usuario pelo banco e editando o usuario na pagina profile
    public function alterarUsuario(Request $request, $id) {
        $usuario = User::find($id);
<<<<<<< HEAD

=======
        
>>>>>>> 22be942cfbc8de7e018c0843d41e63eadb787497
        $request->validate([
            'name' => $data['name'],
            'sobrenome' => $data['sobrenome'],
            'imagem' => $caminhoRelativo,
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'cidade' => $data['cidade'],
            'estado' => $data['estado'],
            'CEP' => $data['CEP'], 
        ]);

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
        $usuario = $usuario->id;

        return redirect('/profile/'.$usuario);
    }
}

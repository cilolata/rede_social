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
        
        $request->validate([
            'name' => $data['name'],
            'sobrenome' => $data['sobrenome'],
            'imagem' => $data['imagem'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'cidade' => $data['cidade'],
            'estado' => $data['estado'],
            'CEP' => $data['CEP'], 
        ]);

        $usuario->save();
        $usuario = $usuario->id;

        return redirect('/profile/'.$usuario);
    }
}

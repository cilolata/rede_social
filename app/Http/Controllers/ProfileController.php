<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function profile($id){
        $usuario = User::find($id);
        return view('profile')->with('usuario', $usuario);
    }

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

        return redirect('/profile/{id}');
    }
}

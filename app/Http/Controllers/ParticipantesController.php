<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Participantes;
use App\User;
use App\Eventos;
use App\Categorias;

class ParticipantesController extends Controller
{
    public function adicionarParticipantes(Request $request){
        $categorias = Categorias::all();
        $eventos = Eventos::find($request->input("evento_id"));
        $users = User::find($request->input("user_id"));
        $participantes = Participantes::all();
        
        $evento = $eventos->id;
        return view('/event/'.$evento, compact('users', 'participantes', 'eventos', 'categorias'));
    }

    public function createParticipantes(Request $request){
        
        $participantes = Participantes::create([
            "fk_eventos" => $request->input("evento_id"),
            "fk_users" => $request->input("user_id")
        ]);

        $participantes->save();
        
        $evento = $request->input("evento_id");
        return view('/event/'.$evento);
    }

    
}

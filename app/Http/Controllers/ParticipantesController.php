<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use App\Http\Controllers\Controller;
use App\Participantes;
use App\User;
use App\Eventos;
use App\Categorias;
use Illuminate\Support\Facades\Auth;
use DB;
class ParticipantesController extends Controller
{
    public function adicionarParticipantes(Request $request){
        $categorias = Categorias::all();
        $eventos = Eventos::find($request->input("evento_id"));
        $users = User::find($request->input("user_id"));
        $participantes = Participantes::all();
        $todosEventos = Eventos::all();
        
        $evento = $request->input("evento_id");
        return view('event', compact('users', 'participantes', 'eventos', 'categorias', 'todosEventos'));
    }
    public function createParticipantes(Request $request){
        
        $participantes = Participantes::create([
            "fk_eventos" => $request->input("evento_id"),
            "fk_users" => $request->input("user_id")
        ]);
        $participantes->save();
        
        $evento = $request->input("evento_id");
        return redirect('/event/'.$evento);
    }
    
}
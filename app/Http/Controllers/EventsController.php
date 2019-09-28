<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Eventos;
use App\User;
use App\Categorias;
use Illuminate\Support\Facades\Auth;
use DB;

class EventsController extends Controller
{

    //rotinas pagina index
    public function index(){
        $categorias = Categorias::all();
        $eventos = Eventos::orderBy('id', 'ASC')->paginate(4);
        
        return view('index', compact('eventos', 'categorias'));
    }

    //rotinas pagina home
    public function home(){
        $categorias = Categorias::all();
       // $usuario = User::find(id);
        //$eventos = Eventos::orderBy('id', 'ASC')->get();
        $eventos = Eventos::table('eventos')->where($eventos->users->name, '=', $usuario->name)->get();
        return view('home', compact('eventos', 'categorias'));
    }
    
   

    //rotinas pagina evento
    public function eventos($id){
        $eventos = Eventos::find($id);
        $users = User::find($eventos->fk_users);
        $categorias = Categorias::find($eventos->fk_categorias);
      //  $eventos->fk_users = $users;
     //   $participantes = User::find($users);       
        return view('event', ["eventos"=>$eventos, "users"=>$users, "categorias"=>$categorias /*"participantes"=>$participantes*/]);
    }

   public function adicionarParticipantes(Request $request){
        $eventos = Eventos::find($request->input("evento_id"));
        $users = $request->input("user_id");
        $eventos->fk_users = $users;
        $participantes = User::find($users);
        return view('event', compact('users', 'participantes', 'eventos'));
    }






    //pagina criando evento
    public function adicionandoEvento(){
        $usuario = Auth::user();
        $usuarios = User::all();
        $categorias = Categorias::all();
        return view('criandoEvento', compact('usuario','usuarios','categorias'));
    }
    
    //salvando e validando o evento na pagina criando evento
    public function salvandoEvento(Request $request){
        $request->validate([
            "dataEvento"=> 'required',
            "titulo" => "required",
            "descricao" => 'required',
            "endereco"=> 'required',
            "cidade"=> 'required',
            "estado"=> 'required',
            "inicioEvento"=> 'required',
            "fimEvento"=> 'required',
            "categoria_descricao" => 'required',
            "user_id" => "required"
            
         ]);

        // salvando caminho da imagem e armazenando-a no projeto
        // capturando imagem selecionada pelo usuário
        $arquivo = $request->file('imagem');
        // if (empty($arquivo)) {
        //     abort(400, 'Nenhum arquivo foi enviado');
        // }

        $nomePasta = "uploads";

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

        // criando o evento trazendo as infos dos inputs da pagina criando evento
        $eventos = Eventos::create([
            "dataEvento"=> $request->input("dataEvento"),
            "imagem" =>$caminhoRelativo,
            "titulo" => $request->input("titulo"),
            "descricao" => $request->input("descricao"),
            "endereco"=> $request->input("endereco"),
            "cidade"=> $request->input("cidade"),
            "estado"=> $request->input("estado"),
            "inicioEvento"=> $request->input("inicioEvento"),
            "fimEvento"=> $request->input("fimEvento"),
            "fk_categorias"=> $request->input("categoria_descricao"),
            "fk_users"=> $request->input("user_id")
            
        ]);

        $eventos->save();        
        $evento = $eventos->id;

        return redirect('/event/'.$evento);
    }



       // rotinas pagina search    
        public function search(Request $request){
        $categorias = Categorias::all();
        $eventos = Eventos::all();
        if($request->input("select_categoria")) {
            $eventos = Eventos::where('fk_categorias', '=', $request->input("select_categoria"))->get();
        }
        return view('search', compact('eventos', 'categorias'));
    }



    /*
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Eventos;
use App\User;
use App\Categorias;

class EventsController extends Controller
{
    public function eventos($id){
        $eventos = Eventos::find($id);
        // dd($eventos);
        return view('event')->with('eventos', $eventos);

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('search');
    }

    /*public function search(){
        return view('event');
    }

    */


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    public function adicionandoEvento(){
        $usuarios = User::all();
        $categorias = Categorias::all();

        return view('criandoEvento', compact('usuarios','categorias'));
    }
    
    public function salvandoEvento(Request $request){
        $request->validate([
            "titulo" => "required|max:50"
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

        $eventos = Eventos::create([
            "titulo" => $request->input("titulo"),
            "dataEvento"=> $request->input("dataEvento"),
            "descricao" => $request->input("descricao"),
            "endereco"=> $request->input("endereco"),
            "cidade"=> $request->input("cidade"),
            "estado"=> $request->input("estado"),
            "inicioEvento"=> $request->input("inicioEvento"),
            "fimEvento"=> $request->input("fimEvento"),
            "fk_categoria"=> $request->input("categoria"),
            "fk_users"=> $request->input("users"),
            "imagem" => $caminhoRelativo,
        ]);


        $eventos->save();


        return redirect('/search');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
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
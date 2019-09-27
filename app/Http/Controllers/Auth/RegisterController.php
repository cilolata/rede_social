<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'sobrenome'=> ['required', 'string', 'max:255'],
            //"imagem" => ['required', 'string', 'max:300'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'cidade' => ['required', 'string', 'max:200'],
            'estado' => ['required', 'string', 'max:200'],
            'CEP' => ['required', 'string', 'max:9']
        ]);



    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {

        // salvando caminho da imagem e armazenando-a no projeto
        // capturando imagem selecionada pelo usuário

        $request = request();

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

        $user =  User::create([
            'name' => $data['name'],
            'sobrenome' => $data['sobrenome'],
            'imagem' => $caminhoRelativo,
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'cidade' => $data['cidade'],
            'estado' => $data['estado'],
            'CEP' => $data['CEP'],
        ]);

       // dd($data);

    function deletarUsuario($id) {
            $user = User::find($id);
    
            $user->delete();
    
            return redirect('/index');
    }

    }
}
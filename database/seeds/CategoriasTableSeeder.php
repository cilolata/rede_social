<?php

use Illuminate\Database\Seeder;
use App\Categorias;

class CategoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categorias::create([
            "descricao" => "Ecologia",
            "imagem" => "src='{{asset('public/img/arvore.png')}}'"
        ]);

        Categorias::create([
            "descricao" => "Saúde",
            "imagem" => "src='{{asset('public/img/doacao-de-sangue.png')}}'"
        ]);

        Categorias::create([
            "descricao" => "Alimentação",
            "imagem" => "src='{{asset('public/img/cereais.png')}}'"
        ]);

        Categorias::create([
            "descricao" => "Animais",
            "imagem" => "src='{{asset('public/img/cao.png')}}'"
        ]);

        Categorias::create([
            "descricao" => "Cidadania",
            "imagem" => "src='{{asset('public/img/friendship.png')}}'"
        ]);
    }
}

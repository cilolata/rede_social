<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "name" => "Abirosvaldo",
            "sobrenome"=>"Lolata",
            "email" => "abirosvaldo@gmail.com",
            "imagem" => "https://i.pinimg.com/originals/b9/58/5a/b9585a9d1b20060f0d7e83c72eaa159f.jpg",
            "cidade"=>"são paulo",
            "password" => bcrypt("123456")
        ]);

        User::create([
            "name" => "Teste",
            "sobrenome"=>"testando",
            "email" => "teste@gmail.com",
            "cidade"=>"são paulo",
            "password" => bcrypt("123456")
        ]);

        // factory trabalha com 2 parametro onde o primeiro
        //é o model e o segundo a quantidade de registros
        //que desejamos criar
        factory(User::class, 2)->create();
    }
}

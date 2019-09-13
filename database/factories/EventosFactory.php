<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Eventos;
use Faker\Generator as Faker;

$factory->define(Eventos::class, function (Faker $faker) {
    return [
        'dataEvento' => "10/09/2019" ;
        'imagem' => ;
        'titulo' => $faker->name;
        'endereco' => "Av. Pedro Álvares Cabral" ;
        'cidade' => "São Paulo" ;
        'estado' => "SP" ;
        'inicioEvento' => "10:00" ;
        'fimEvento' => "14:00";
        'fk_categorias' =>  ;
        'fk_users' => ;
    ];
});

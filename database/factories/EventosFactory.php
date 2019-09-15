<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Eventos;
use Faker\Generator as Faker;

$factory->define(Eventos::class, function (Faker $faker) {
    return [
        'dataEvento' => "2019-10-28",
        'imagem'=>'https://source.unsplash.com/random',
        'titulo' => $faker->name,
        'descricao' => 'um evento teste para vermos o que dá',
        'cep' => '04094-050',
        'endereco' => "Av. Pedro Álvares Cabral",
        'cidade' => "São Paulo",
        'estado' => "SP",
        'inicioEvento' => "10:00",
        'fimEvento' => "14:00",
        'fk_categorias' => 1,
        'fk_users' => 1
    ];
});

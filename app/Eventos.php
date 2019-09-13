<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Eventos extends Model
{
    protected $table = 'eventos';
    protected $primaryKey = 'id';
    protected $fillable = ['titulo', 'sinopse', 'imagem', 'id_protagonista', 'categorias'];

    public function categorias() {
        return $this->hasOne(Genero::class, 'id', 'categorias');
    }

    public function ator() {
        return $this->hasOne(Ator::class, 'id', 'id_users');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Eventos extends Model
{
    protected $table = 'eventos';
    protected $primaryKey = 'id';
    protected $fillable = ['dataEvento','titulo', 'descricao', 'imagem', 'cep', 'endereco', 'cidade', 'estado', 'inicioEvento', 'fimEvento', 'fk_categorias', 'fk_users'];

    public function categorias() {
     return $this->hasOne(Categorias::class, 'id', 'fk_categorias');
    }

    public function users() {
        return $this->hasOne(User::class, 'id', 'fk_users');
    }

   
}

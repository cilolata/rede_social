<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    protected $table = "categorias";
    protected $primaryKey = "id";
    protected $fillable = ["descricao"];

    public function eventos() {
        return $this->hasMany(Eventos::class, 'id_categorias', 'id');
    }
}
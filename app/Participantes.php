<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participantes extends Model
{
    protected $table = 'participantes';
    protected $primaryKey = 'id';
    protected $fillable = ['fk_eventos', 'fk_users'];

    public function users() {
        return $this->belongsToMany(User::class, 'id', 'fk_users');
    }

    public function eventos() {
        return $this->belongsToMany(Eventos::class, 'id', 'fk_eventos');
    }
}

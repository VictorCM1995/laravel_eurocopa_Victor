<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    use HasFactory;
    protected $table = "paises";

    public function grupo(){
    	return $this->hasOne(Grupo::class);
    }

    public function jugadores(){
    	return $this->hasMany(Jugador::class);
    }

    public function partidos(){
    	return $this->hasMany(Partido::class);
    }
}

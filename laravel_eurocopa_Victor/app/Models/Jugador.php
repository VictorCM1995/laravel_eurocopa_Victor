<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Jugador extends Model
{
    use HasFactory;
    protected $table = "jugadores";

    public function edad(){
    	$fechaFormateada = Carbon::parse($this->fechaNacimiento);
    	return $fechaFormateada->diffInYears(Carbon::now());
    }

    public function pais(){
    	return $this->belongsTo(Pais::class);
    }
}

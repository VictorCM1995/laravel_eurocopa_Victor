<?php

namespace Database\Factories;

use App\Models\Jugador;
use App\Models\Pais;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class JugadorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Jugador::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */

    public function definition()
    {
        $nombre = $this->faker->firstNameMale;
        $numeroCamiseta = $this->faker->randomNumber(25);
        return [
            "nombre" => $nombre,
            "numeroCamiseta" => $numeroCamiseta,
            "fechaNacimiento"=> dateTimeBetween($startDate = "-35 years",$endDate = "+18 years", $timezone = null),
            "posicion" => randomElement($array = array("POR","DEF","CEN","DEL")),
            "pais_id" => Pais::all()->random()->id
        ];
    }
}

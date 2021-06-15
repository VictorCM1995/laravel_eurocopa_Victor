<?php

namespace Database\Seeders;

use App\Models\Grupo;
use App\Models\Pais;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PaisSeeder extends Seeder
{

    private $grupos = [
        "A" => ['Turquía',	'Italia',	'Gales',	'Suiza'],
        "B" => ['Dinamarca',	'Finlandia',	'Bélgica',	'Rusia'],
        "C" => ['Países Bajos',	'Ucrania',	'Austria',	'Macedonia del Norte'],
        "D" => ['Inglaterra',	'Croacia',	'Escocia',	'República Checa'],
        "E" => ['España',	'Suecia',	'Polonia',	'Eslovaquia'],
        "F" => ['Hungría',	'Portugal',	'Francia',	'Alemania']
    ];


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach($this->grupos as $grupo => $paises)
        {
            $nuevoGrupo = new Grupo();
            $nuevoGrupo->letra = $grupo;
            $nuevoGrupo->save();

            foreach($paises as $nombrePais)
            {
                $pais = new Pais();
                $pais->nombre = $nombrePais;
                $pais->slug = Str::slug($nombrePais);
                $pais->grupo_id = $nuevoGrupo->id;
                $pais->save();
            } 
            
        }
    }
}

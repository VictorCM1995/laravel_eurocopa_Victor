<?php

namespace Database\Seeders;

use App\Models\Grupo;
use App\Models\Partido;
use Illuminate\Database\Seeder;

class PartidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $grupos = Grupo::all();

        foreach($grupos as $grupo)
        {
            $paises = $grupo->paises;
            for($i = 0; $i< count($paises);$i++)
            {
                for($j=$i+1;$j<count($paises);$j++)
                {
                    $partido = new Partido();
                    $partido->pais1_id = $paises[$i]->id;
                    $partido->pais2_id = $paises[$j]->id;
                    if($paises[$i]->grupo->letra > 'C')
                    {
                        $partido->goles_pais1 = rand(0,4);
                        $partido->goles_pais2 = rand(0,3);
                        $partido->disputado = true;
                    }
                    else
                    {
                        $partido->goles_pais1 = 0;
                        $partido->goles_pais2 = 0;
                        $partido->disputado = false;
                    }
                    
                    $partido->save();
                }
            }
        }

        
    }
}

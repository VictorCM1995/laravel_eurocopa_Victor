<?php

namespace Database\Seeders;

use App\Models\Jugador;
use App\Models\Pais;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PaisSeeder::class);
        $this->call(PartidoSeeder::class);
        $paises = Pais::all();
        foreach($paises as $pais)
        {
            for($i=1;$i<=25;$i++)
            {
                Jugador::factory(1)->create([
                    'numeroCamiseta' => $i,
                    'pais_id' => $pais->id
                ]);
            }
        }
    }
}

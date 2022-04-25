<?php

use App\Train;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void 
     */
    public function run()
    {
        $train = new Train();

        $train->azienda = 'Italo';
        $train->stazione_di_partenza = 'Roma Termini';
        $train->stazione_di_arrivo = 'Milano Centrale';
        $train->orario_di_partenza = '9:43';
        $train->orario_di_arrivo = '13:20';
        $train->codice_treno = '12345';
        $train->numero_carrozze = '8';
        $train->in_orario = true;
        $train->cancellato = false;

        $train->save();
    }
}

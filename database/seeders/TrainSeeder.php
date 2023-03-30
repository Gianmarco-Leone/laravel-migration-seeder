<?php

namespace Database\Seeders;

use App\Models\Train;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $new_train= new Train;

        $new_train->azienda='Italo';
        $new_train->stazione_di_partenza='Roma tiburtina';
        $new_train->stazione_di_arrivo='Napoli centrale';
        $new_train->orario_partenza='08:00:00';
        $new_train->orario_arrivo='09:30:00';
        $new_train->codice_treno='ANCHEK9264BFJW2';
        $new_train->numero_carrozze='7';
        $new_train->in_orario='1';
        $new_train->cancellato='1';

        $new_train->save();
    }
}
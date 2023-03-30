<?php

namespace Database\Seeders;

use App\Models\Train;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for ($i = 0; $i < 20; $i++) {
            
            $train= new Train;

            $train->azienda=$faker->company();
            $train->stazione_di_partenza=$faker->city();
            $train->stazione_di_arrivo=$faker->city();
            $train->orario_partenza=$faker->time();
            $train->orario_arrivo=$faker->time();
            $train->codice_treno=$faker->uuid();
            $train->numero_carrozze=$faker->randomDigitNot(0);
            $train->in_orario=$faker->randomElement([0, 1]);
            $train->cancellato=$faker->randomElement([0, 1]);
    
            $train->save();
        }
    }
}
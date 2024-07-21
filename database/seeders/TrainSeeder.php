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
     */
    public function run(Faker $faker): void
    {
        for($i=0; $i<30; $i++){
            $trains = new Train();
            $trains->azienda = $faker->word(20);
            $trains->stazione_di_partenza = $faker->word(20);
            $trains->stazione_di_arrivo = $faker->word(20);
            $trains->orario_di_partenza= $faker->dateTime();
            $trains->orario_di_arrivo = $faker->dateTime();
            $trains->codice_treno = $faker->word(20);
            $trains->numero_carrozze= $faker->randomDigitNotNull();
            $trains->in_orario = $faker->boolean(50);
            $trains->cancellato = $faker->boolean(50);
            $trains->save();
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for ($i=0; $i<5; $i++) {

            $train = new Train();
            $train->Azienda = $faker->word();
            $train->Stazione_di_partenza = $faker->city();
            $train->Stazione_di_arrivo = $faker->city();
            $train->Orario_di_partenza = $faker->date('2023-05-12');
            $train->Orario_di_arrivo = $faker->date();
            $train->Codice_treno = $faker->bothify('###??');;
            $train->Numero_carrozze = $faker->randomDigitNotNull();
            $train->In_orario = $faker->numberBetween(0, 1);
            $train->Cancellato = $faker->numberBetween(0, 1);
            $train->save();

        }

    }
}

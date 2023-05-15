<?php

namespace Database\Seeders;

use App\Functions\Helpers;
use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $csvContent = Helpers::getCsvContent(__DIR__ . '/trains.csv');

        foreach ($csvContent as $index => $row) {
            if ($index > 0) {
                $train = new Train();
                $train->Azienda = $row[0];
                $train->Stazione_di_partenza = $row[1];
                $train->Stazione_di_arrivo = $row[2];
                $train->Orario_di_partenza = $row[3];
                $train->Orario_di_arrivo = $row[4];
                $train->Codice_treno = $row[5];
                $train->Numero_carrozze = $row[6];
                $train->In_orario = $row[7];
                $train->Cancellato = $row[8];
                $train->save();
            }
        }
    }
}

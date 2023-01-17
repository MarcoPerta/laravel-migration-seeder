<?php

use App\Models\Train;
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
        $trains = [
            [
                'destinazione' => 'Agrigento',
                'partenza' => '13.20',
                'arrivo' => '15.20',
                'binario' => 11,
                'compagnia' => 'Trenitalia',
            ],
            [
                'destinazione' => 'Taranto',
                'partenza' => '14.00',
                'arrivo' => '16.00',
                'binario' => 5,
                'compagnia' => 'Freccia',
            ]
        ];

        foreach($trains as $elem){
            $newTrain = new Train();
            $newTrain->destinazione = $elem['destinazione'];
            $newTrain->partenza = $elem['partenza'];
            $newTrain->arrivo = $elem['arrivo'];
            $newTrain->binario = $elem['binario'];
            $newTrain->compagnia = $elem['compagnia'];
            $newTrain->save();
        }
    }
}

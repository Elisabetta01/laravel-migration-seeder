<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Train;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker){
            for($i = 0; $i < 100; $i++){
                $train = new Train();
                $train->Azienda = $faker->company();
                $train->Stazione_di_Partenza = $faker->randomElement(['Roma', 'Milano', 'Napoli']);
                $train->Stazione_di_Arrivo = $faker->randomElement(['Bologna', 'Trieste', 'Bari']);
                $train->Orario_di_Partenza = $faker->dateTimeBetween('-1 day', '+1 day');
                $train->Orario_di_Arrivo = $faker->dateTimeBetween('+1 day', '+2 day');
                $train->Codice_Treno = 'AB'.$faker->randomDigit();
                $train->Numero_Carrozze = $faker->randomDigit();
                $train->In_orario = $faker->boolean(70);
                $train->Cancellato = $faker->boolean(20);
                
                $train->save();
            }
        }
    }


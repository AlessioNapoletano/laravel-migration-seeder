<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 50; $i++) { 
            $newTrain = new Train();
            $newTrain->agency = $faker->sentence(3, true);
            $newTrain->departureStation = $faker->sentence(5, true);
            $newTrain->arrivalStation = $faker->sentence(5, true);
            $newTrain->departureTime = $faker->dateTime();
            $newTrain->arrivalTime = $faker->dateTime();
            $newTrain->codTrain = $faker->ean8();
            $newTrain->numberCarriages = $faker->randomDigit();
            $newTrain->inTime = $faker->boolean();
            $newTrain->deleted = $faker->boolean();
            $newTrain->save();
        }
    }
}

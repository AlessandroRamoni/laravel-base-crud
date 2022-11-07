<?php

use Illuminate\Database\Seeder;

use App\models\Comics;

use Faker\Generator as Faker;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //
        for($i = 0; $i < 20; $i++){

            $comics = new Comics();
            $comics->nome_evento = $faker->name();
            $comics->label = $faker->name();
            $comics->outdoor = $faker->boolean();
            $comics->indirizzo = $faker->address();
            $comics->quando = $faker->date();

            $comics->save();

        }
    }
}

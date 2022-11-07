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

            $comic = new Comic();
            $comic->nome_evento = $faker->name();
            $comic->label = $faker->name();
            $comic->outdoor = $faker->boolean();
            $comic->indirizzo = $faker->address();
            $comic->quando = $faker->date();

            $comic->save();

        }
    }
}

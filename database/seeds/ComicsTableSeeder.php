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
            $comics->titolo = $faker->name();
            $comics->casa_editrice = $faker->name();
            $comics->lingua_originale = $faker->boolean();
            $comics->autore = $faker->address();
            $comics->anno = $faker->date();

            $comics->save();

        }
    }
}

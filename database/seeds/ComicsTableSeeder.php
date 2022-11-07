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
            $comics->title = $faker->name();
            $comics->description = $faker->name();
            $comics->thumb = $faker->name();
            $comics->price = $faker->randomFloat(2);
            $comics->series = $faker->name();
            $comics->sale_date = $faker->date();
            $comics->type = $faker->date();


            $comics->save();

        }
    }
}

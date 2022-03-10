<?php

use App\Journey;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class JourneysTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker) {
        for ($i = 0; $i <= 10; $i++) {
            $table = new Journey();
            
            $table->id();
            $table->country = $faker->country();
            $table->city = $faker->city();
            $table->date = $faker->dayOfMonth('+2 weeks');
            $table->date = $faker->dayOfMonth('+2 weeks');
            $table->description = $faker->realText();
            $table->timestamps();

            $table->save();
        };
    }
}

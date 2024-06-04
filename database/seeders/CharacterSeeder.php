<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;
use App\Models\Character;
use Illuminate\Support\Facades\DB;

class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {

        DB::table('characters')->truncate();

        for ($i = 0; $i < 10; $i++) {
            $new_character = new Character();

            $new_character->name = $faker->name();
            $new_character->url_img = $faker->url();
            $new_character->description = $faker->text();
            $new_character->attack = $faker->randomDigit();
            $new_character->defence = $faker->randomDigit();
            $new_character->speed = $faker->numberBetween(1,9);
            $new_character->life = $faker->numberBetween(10,100);

            $new_character->save();
        }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;
use App\Models\Character;
use App\Models\Item;
use App\Models\Type;
use Illuminate\Support\Facades\DB;

class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {

        // DB::table('characters')->truncate();

        $item_ids = Item::all()->pluck('id')->all();
        $type_ids = Type::all()->pluck('id')->all();

        $imgs = [
            'Barbaro.png',
            'Chierico.webp',
            'Druido.png',
            'Mago.png',
            'Monaco.png',
            'Paladino.png',
            'Warlock.png'
        ];

        for ($i = 0; $i < 10; $i++) {
            $new_character = new Character();

            $new_character->type_id = $faker->randomElement($type_ids);
            $new_character->name = $faker->name();
            $new_character->url_img = $faker->randomElement($imgs);
            $new_character->description = $faker->text();
            $new_character->attack = $faker->randomDigit();
            $new_character->defence = $faker->randomDigit();
            $new_character->speed = $faker->numberBetween(1,9);
            $new_character->life = $faker->numberBetween(10,100);


            $new_character->save();

            $random_item_ids = $faker->randomElements($item_ids, $faker->numberBetween(1,5));      
            $new_character->items()->attach($random_item_ids, ['qty' => $faker->numberBetween(1,9)]);

        }
    }
}

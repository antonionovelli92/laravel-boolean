<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Egg;
use Faker\Generator as Faker;

class EggSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void

    {


        for ($i = 0; $i < 10; $i++) {
            $new_egg = new Egg();
            $new_egg->name = $faker->name();
            $new_egg->color = $faker->colorName();
            $new_egg->contains = $faker->boolean();
            $new_egg->chocolate = $faker->randomElement(['Bianco', 'Fondente', 'Latte', 'Vegano']);
            $new_egg->description = $faker->paragraph();
            $new_egg->thumb = $faker->imageUrl(600, 400, 'animals', true);
            $new_egg->size = $faker->randomElement(['S', 'M', 'L', 'XL']);

            $new_egg->save();
        }
    }
}

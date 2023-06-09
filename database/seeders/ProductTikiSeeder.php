<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker;

class ProductTikiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker\Factory::create();

        $limit = 10;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('product_tikis')->insert([
                'name' => $faker->sentence($nbWords = 6, $variableNbWords = true),
                'img' => $faker->imageUrl($width = 640, $height = 480),
                'star' => $faker->numberBetween($min = 1, $max = 5),
                'price' => $faker->randomFloat(3,1),
                'promote' => $faker->numberBetween($min = 1, $max = 3),
                'sale_number'=>$faker->numberBetween($min = 1, $max =3),
            ]);
        }
    }
}

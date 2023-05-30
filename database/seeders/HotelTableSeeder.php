<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use DB;
class HotelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fake  = Faker::create();
        for($i =0;$i<10;$i++):
            DB::table('hotels')->insert([
                "hotel_name"=> $fake->name,
                "address"=>$fake->address,
                "desc_hotel"=> $fake->text,
                "star"=>$fake->randomFloat(1, 0,5)
            ]);
        endfor;
    }
}

<?php
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Faker\Factory;
use Faker\Provider\Image;
class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();
        //về làm thêm dữ liệu faker..
        $limit =100;
        for($i=0;$i<$limit;$i++):
            DB::table('rooms')->insert([
                "name"=>$faker->name,
                "image"=>$faker->imageUrl($width = 640, $height = 480, 'cats'),
                "price"=> $faker->randomFloat(300,200, 1000),
                "status"=> $faker->randomElement(["hoạt động","Đã bị khóa"])
            ]);
        endfor;
    }
}
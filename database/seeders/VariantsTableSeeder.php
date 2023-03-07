<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Variants;

class VariantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 100; $i++) {
            Variants::create([
                'productId' => Product::all()->random()->id,
                'size' => $faker->randomElement(['38' ,'39', '40', '41', '42', '43']),
                'color' => $faker->randomElement(['RED' ,'BLUE', 'WHITE', 'YELLOW']),
                'price' => $faker->numberBetween($min = 1500, $max = 6000),
                'featured_image' => 'https://static.nike.com/a/images/t_PDP_1280_v1/f_auto,q_auto:eco/94eb686a-b427-45ec-9026-d81a893f3ae6/nikecourt-air-zoom-vapor-9-5-tour-tennis-shoes-B7lbVW.png',
            ]);
        }
    }
}

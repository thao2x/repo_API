<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 50; $i++) {
            Product::create([
                'userId' => User::all()->random()->id,
                'title' => 'Shoes _ '.$faker->regexify('[A-Z]{5}[0-4]{3}'),
                'metaTitle' => $faker->text(),
                'slug' => $faker->slug(),
                'summary' => $faker->text(),
                'type' => 1,
                'sku' => $faker->regexify('[A-Za-z0-9]{5}'),
                'price' => $faker->numberBetween($min = 1500, $max = 6000),
                'discount' => 10,
                'quantity' => 1,
                'shop' => 1,
                'content' => $faker->paragraph
            ]);
        }
    }
}

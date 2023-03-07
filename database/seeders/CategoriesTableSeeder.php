<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 20; $i++) {
            Category::create([
                'title' => 'Category _ '.$faker->regexify('[A-Z]{5}[0-4]{3}'),
                'metaTitle' => $faker->text(),
                'slug' => $faker->slug(),
                'content' => $faker->text(10)
            ]);
        }
    }
}

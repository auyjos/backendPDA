<?php

namespace Database\Seeders;

use App\Models\Productos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 50; $i++) {
            Productos::create([
                'name' => $faker->name,
                'description' => $faker->sentence(12),
                'image' => $faker->imageUrl($width = 640, $height = 480),
                'brand'  => $faker->word(),
                'price' => rand(300, 800) . '.99',
                'price_sale' => rand(300, 800) . '.99',
                'category' => $faker->randomElement(['Toyota', 'Apple', 'Nokia', 'Samsung']),
                'stock' => $faker->randomDigit(),
            ]);
        }
    }
}

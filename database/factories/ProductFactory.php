<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{

    public function definition(): array
    {
        return [
            'name'        => fake()->word(),
            'category_id' => Category::inRandomOrder()->first()->id,
            'description' => fake()->paragraph(),
            'price'       => rand(1000, 99999),
        ];
    }
}

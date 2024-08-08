<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Brand;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
            'article_code' => $this->faker->unique()->word,
            'brand_id' => Brand::factory(), // Mengaitkan dengan BrandFactory
            'category' => $this->faker->randomElement(['sepatu', 'sandal']),
            'price' => $this->faker->randomFloat(2, 10, 1000),
        ];
    }
}

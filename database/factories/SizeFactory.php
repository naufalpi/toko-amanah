<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Size>
 */
class SizeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'product_id' => Product::factory(),  // Menghubungkan dengan Product factory
            'size' => $this->faker->randomElement(['S', 'M', 'L', 'XL', '38', '39', '40', '41']),
            'stock' => $this->faker->numberBetween(1, 50)
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tag>
 */
class TagFactory extends Factory
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
            'tag_code' => $this->faker->unique()->regexify('[A-Z]{6}[0-9]{3}'),
            'tag_type' => $this->faker->randomElement(['sepatu', 'sandal', 'tas'])
        ];
    }
}

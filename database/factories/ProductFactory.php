<?php

namespace Database\Factories;

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
            'description' => $this->faker->sentence,
            'category' => $this->faker->randomElement(['sepatu', 'sandal', 'tas']),
            'brand' => $this->faker->company,
            'price' => $this->faker->randomFloat(2, 10000, 1000000),
            'stock' => $this->faker->numberBetween(1, 100),
            'tag_code' => $this->faker->unique()->regexify('[A-Z]{6}[0-9]{3}')
        ];
    }
}

<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Product;
use App\Models\Size;
use App\Models\Tag;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Create 10 products, each with sizes and tags
        Product::factory(10)->create()->each(function ($product) {
            // Create 3 sizes for each product
            Size::factory(3)->create(['product_id' => $product->id]);

            // Create 1 tag for each product
            Tag::factory()->create(['product_id' => $product->id]);
        });
    }
}

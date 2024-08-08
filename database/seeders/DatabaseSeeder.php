<?php

namespace Database\Seeders;


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

        \App\Models\Brand::factory(10)->create();
        \App\Models\Size::factory(10)->create();
        \App\Models\Product::factory(50)->create();
        \App\Models\Inventory::factory(100)->create();
    }
}

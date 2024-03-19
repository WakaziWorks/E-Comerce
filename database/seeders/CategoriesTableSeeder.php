<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category; // Ensure this matches the actual model name and namespace

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Define a list of categories to seed
        $categories = [
            ['CategoryName' => 'Electronics', 'Description' => 'Gadgets, devices, and technology.'],
            ['CategoryName' => 'Books', 'Description' => 'Readables from fiction to academic.'],
            ['CategoryName' => 'Home & Kitchen', 'Description' => 'Everything for your house.'],
            // Add more categories as needed
        ];

        // Loop through each category and insert it into the database
        foreach ($categories as $category) {
            CategoriesTableSeeder::create($category);
        }
    }
}

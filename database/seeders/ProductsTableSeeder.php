<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categories; // Use your actual Category model namespace
use App\Models\Product; // Assuming you have a Product model
use App\Models\Supplier; // Assuming you have a Supplier model

class ProductsTableSeeder extends Seeder
{
    public function run(): void
    {
        // Ensure that there is a category named 'Collection' in the database
        $collectionCategory = Categories::firstOrCreate([
            'CategoryName' => 'Collection', // Ensure this matches the column name in your categories table
        ]);

        // Ensure that there is at least one supplier in the database
        // This is simplistic and should be adjusted to match your actual requirements
        $supplier = Suppliers::firstOrFail(); // Or use firstOrCreate with appropriate criteria

        // Seed the products table with some products
        $products = [
            // Define your products here
        ];

        foreach ($products as $product) {
            Product::create($product + [
                'CategoryID' => $collectionCategory->Category_ID, // or 'id' if your primary key is named 'id'
                'SupplierID' => $supplier->SupplierID, // Adjust according to your column name
            ]);
        }
    }
}

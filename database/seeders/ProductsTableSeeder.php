<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\Product;
use App\Models\Supplier;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Ensure that there is a category named 'Collection' in the database
        $collectionCategory = CategoriesTableSeeder::firstOrCreate([
            'name' => 'Collection', // Assuming 'name' is the column for category name
        ]);

        // Ensure that there is at least one supplier in the database
        // This is a simplistic approach, in a real scenario, you would want to have specific suppliers
        $supplier = Suppliers::firstOrCreate([
            'name' => 'Default Supplier', // Assuming 'name' is the column for supplier name
        ]);

        // Now, we seed the products table with some products that belong to the 'Collection' category
        $products = [
            [
                'ProductName' => 'Product 1',
                'SupplierID' => $supplier->id,
                'CategoryID' => $collectionCategory->id,
                'QuantityPerUnit' => '10 boxes',
                'UnitPrice' => 20.00,
                'UnitsInStock' => 100,
                'UnitsOnOrder' => 50,
                'ReorderLevel' => 20,
                'Discontinued' => false,
            ],
            [
                'ProductName' => 'Product 2',
                'SupplierID' => $supplier->id,
                'CategoryID' => $collectionCategory->id,
                'QuantityPerUnit' => '20 boxes',
                'UnitPrice' => 25.00,
                'UnitsInStock' => 200,
                'UnitsOnOrder' => 80,
                'ReorderLevel' => 30,
                'Discontinued' => false,
            ],
            // Add more products as needed
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}

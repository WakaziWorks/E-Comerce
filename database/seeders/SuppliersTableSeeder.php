<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Suppliers;

class SuppliersTableSeeder extends Seeder
{
    public function run()
    {
        // Example supplier data
        $suppliers = [
            [
                'CompanyName' => 'Tech Supplies Co.',
                'ContactName' => 'John Doe',
                'ContactTitle' => 'Procurement Manager',
                'Phone1' => '123456789',
                'EmailAddress' => 'contact@techsupplies.co',
                'PhysicalAddress' => '123 Tech Street, Silicon Valley',
                'PIN' => 'ABC123456',
                'City' => 'Tech City',
                'County' => 'Tech County',
            ],
            // Add more suppliers as needed
        ];

        foreach ($suppliers as $supplier) {
            SuppliersTableSeeder::create($supplier);
        }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RegionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    $regions = [
        ['RegionName' => 'Coast', 'City' => 'Mombasa', 'PostalAbbrev' => 'MSA'],
        ['RegionName' => 'Coast', 'City' => 'Kwale', 'PostalAbbrev' => 'KWL'],
        // Add all other regions similarly
    ];

    foreach ($regions as $region) {
        DB::table('regions')->insert($region);
    }
}

}

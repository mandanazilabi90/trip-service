<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $states = [
            // United States
            ['name' => 'California', 'code' => 'CA', 'country_id'=> 1],
            ['name' => 'New York', 'code' => 'NY', 'country_id'=> 1],
            ['name' => 'Texas', 'code' => 'TX', 'country_id'=> 1],
            ['name' => 'Florida', 'code' => 'FL', 'country_id'=> 1],
            ['name' => 'Illinois', 'code' => 'IL', 'country_id'=> 1],
            ['name' => 'Pennsylvania', 'code' => 'PA', 'country_id'=> 1],
            ['name' => 'Ohio', 'code' => 'OH', 'country_id'=> 1],
            ['name' => 'Georgia', 'code' => 'GA', 'country_id'=> 1],
            ['name' => 'North Carolina', 'code' => 'NC', 'country_id'=> 1],
            ['name' => 'Michigan', 'code' => 'MI', 'country_id'=> 1],
            ['name' => 'New Jersey', 'code' => 'NJ', 'country_id'=> 1],
            ['name' => 'Virginia', 'code' => 'VA', 'country_id'=> 1],
            ['name' => 'Washington', 'code' => 'WA', 'country_id'=> 1],
            ['name' => 'Massachusetts', 'code' => 'MA', 'country_id'=> 1],
            ['name' => 'Indiana', 'code' => 'IN', 'country_id'=> 1],
            ['name' => 'Arizona', 'code' => 'AZ', 'country_id'=> 1],
            ['name' => 'Tennessee', 'code' => 'TN', 'country_id'=> 1],
            ['name' => 'Missouri', 'code' => 'MO', 'country_id'=> 1],
            ['name' => 'Maryland', 'code' => 'MD', 'country_id'=> 1],
            ['name' => 'Wisconsin', 'code' => 'WI', 'country_id'=> 1],

            // Canada
            ['name' => 'Ontario', 'code' => 'ON', 'country_id'=> 7],
            ['name' => 'Quebec', 'code' => 'QC', 'country_id'=> 7],
            ['name' => 'British Columbia', 'code' => 'BC', 'country_id'=> 7],
            ['name' => 'Alberta', 'code' => 'AB', 'country_id'=> 7],
            ['name' => 'Manitoba', 'code' => 'MB', 'country_id'=> 7],
            ['name' => 'Saskatchewan', 'code' => 'SK', 'country_id'=> 7],
            ['name' => 'Nova Scotia', 'code' => 'NS', 'country_id'=> 7],
            ['name' => 'New Brunswick', 'code' => 'NB', 'country_id'=> 7],
            ['name' => 'Newfoundland and Labrador', 'code' => 'NL', 'country_id'=> 7],
            ['name' => 'Prince Edward Island', 'code' => 'PE', 'country_id'=> 7],
            ['name' => 'Northwest Territories', 'code' => 'NT', 'country_id'=> 7],
            ['name' => 'Yukon', 'code' => 'YT', 'country_id'=> 7],
            ['name' => 'Nunavut', 'code' => 'NU', 'country_id'=> 7],
        ];

        DB::table('regions')->insert($states);
    }
}

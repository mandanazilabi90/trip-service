<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            $countries = [
            ['name' => 'United States', 'code' => 'US'],
            ['name' => 'United Kingdom', 'code' => 'GB'],
            ['name' => 'France', 'code' => 'FR'],
            ['name' => 'Japan', 'code' => 'JP'],
            ['name' => 'Australia', 'code' => 'AU'],
            ['name' => 'United Arab Emirates', 'code' => 'AE'],
            ['name' => 'Canada', 'code' => 'CA'],
            ['name' => 'Germany', 'code' => 'DE'],
            ['name' => 'Italy', 'code' => 'IT'],
            ['name' => 'Spain', 'code' => 'ES'],
            ['name' => 'Brazil', 'code' => 'BR'],
            ['name' => 'South Korea', 'code' => 'KR'],
            ['name' => 'Russia', 'code' => 'RU'],
            ['name' => 'India', 'code' => 'IN'],
            ['name' => 'China', 'code' => 'CN'],
            ['name' => 'Mexico', 'code' => 'MX'],
            ['name' => 'Egypt', 'code' => 'EG'],
            ['name' => 'Thailand', 'code' => 'TH'],
            ['name' => 'South Africa', 'code' => 'ZA'],
            ['name' => 'Argentina', 'code' => 'AR'],
        ];
        DB::table('countries')->insert($countries);
    }
}

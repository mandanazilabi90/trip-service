<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities = [
            // United States
            ['id' => 1, 'name' => 'New York City', 'iata_code' => 'NYC', 'country_id' => 1],
            ['id' => 2,'name' => 'Los Angeles', 'iata_code' => 'LAX', 'country_id' => 1 ],
            ['id' => 3,'name' => 'Chicago', 'iata_code' => 'CHI', 'country_id' => 1 ],
            ['id' => 4,'name' => 'Houston', 'iata_code' => 'HOU', 'country_id' => 1 ],
            ['id' => 5,'name' => 'Phoenix', 'iata_code' => 'PHX', 'country_id' => 1 ],
            ['id' => 6,'name' => 'Philadelphia', 'iata_code' => 'PHL', 'country_id' => 1 ],
            ['id' => 7,'name' => 'San Antonio', 'iata_code' => 'SAT', 'country_id' => 1 ],
            ['id' => 8,'name' => 'San Diego', 'iata_code' => 'SAN', 'country_id' => 1 ],
            ['id' => 9,'name' => 'Dallas', 'iata_code' => 'DFW', 'country_id' => 1 ],
            ['id' => 10,'name' => 'San Jose', 'iata_code' => 'SJC', 'country_id' => 1 ],
            ['id' => 11,'name' => 'Austin', 'iata_code' => 'AUS', 'country_id' => 1 ],
            ['id' => 12,'name' => 'Jacksonville', 'iata_code' => 'JAX', 'country_id' => 1 ],
            ['id' => 13,'name' => 'San Francisco', 'iata_code' => 'SFO', 'country_id' => 1 ],
            ['id' => 14,'name' => 'Columbus', 'iata_code' => 'CMH', 'country_id' => 1 ],
            ['id' => 15,'name' => 'Indianapolis', 'iata_code' => 'IND', 'country_id' => 1 ],
            ['id' => 16,'name' => 'Seattle', 'iata_code' => 'SEA', 'country_id' => 1 ],
            ['id' => 17,'name' => 'Denver', 'iata_code' => 'DEN', 'country_id' => 1 ],
            ['id' => 18,'name' => 'Washington', 'iata_code' => 'WAS', 'country_id' => 1 ],
            ['id' => 19,'name' => 'Boston', 'iata_code' => 'BOS', 'country_id' => 1 ],

            // Canada
            ['id' => 20,'name' => 'Toronto', 'iata_code' => 'YYZ', 'country_id' => 7],
            ['id' => 21,'name' => 'Montreal', 'iata_code' => 'YMQ', 'country_id' => 7],
            ['id' => 22,'name' => 'Vancouver', 'iata_code' => 'YVR', 'country_id' => 7],
            ['id' => 23,'name' => 'Calgary', 'iata_code' => 'YYC', 'country_id' => 7],
            ['id' => 24,'name' => 'Edmonton', 'iata_code' => 'YEG', 'country_id' => 7],
            ['id' => 25,'name' => 'Ottawa', 'iata_code' => 'YOW', 'country_id' => 7],
            ['id' => 26,'name' => 'Winnipeg', 'iata_code' => 'YWG', 'country_id' => 7],
            ['id' => 27,'name' => 'Quebec City', 'iata_code' => 'YQB', 'country_id' => 7],
            ['id' => 28,'name' => 'Hamilton', 'iata_code' => 'YHM', 'country_id' => 7],
            ['id' => 29,'name' => 'Halifax', 'iata_code' => 'YHZ', 'country_id' => 7],
            ['id' => 30,'name' => 'London', 'iata_code' => 'YXU', 'country_id' => 7],
            ['id' => 31,'name' => 'Victoria', 'iata_code' => 'YYJ', 'country_id' => 7],
            ['id' => 32,'name' => 'Regina', 'iata_code' => 'YQR', 'country_id' => 7],
            ['id' => 33,'name' => 'Saskatoon', 'iata_code' => 'YXE', 'country_id' => 7],
            ['id' => 34,'name' => 'Kelowna', 'iata_code' => 'YLW', 'country_id' => 7],
            ['id' => 35,'name' => 'St. John\'s', 'iata_code' => 'YYT', 'country_id' => 7],
            ['id' => 36,'name' => 'Charlottetown', 'iata_code' => 'YYG', 'country_id' => 7],
            ['id' => 37,'name' => 'Whitehorse', 'iata_code' => 'YXY', 'country_id' => 7],
            ['id' => 38,'name' => 'Yellowknife', 'iata_code' => 'YZF', 'country_id' => 7],
            ['id' => 39,'name' => 'Iqaluit', 'iata_code' => 'YFB', 'country_id' => 7 ],
            // United States
            ['id' => 40,'name' => 'Atlanta', 'iata_code' => 'ATL', 'country_id' => 1 ],

        ];

        DB::table('cities')->insert($cities);
    }
}

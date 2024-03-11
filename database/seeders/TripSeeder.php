<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TripSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trips = [
            [
                'id' => 1,
                'departure_airport_id' => 8,
                'arrival_airport_id' => 26,
                'departure_time' => '2024-03-01',
                'return_time' => null,
                'type' => 'oneway',
            ],
            [
                'id' => 2,
                'departure_airport_id' => 8,
                'arrival_airport_id' => 26,
                'departure_time' => '2024-02-24',
                'return_time' => null,
                'type' => 'oneway',
            ],
            [
                'id' => 3,
                'departure_airport_id' => 8,
                'arrival_airport_id' => 26,
                'departure_time' => '2024-02-24',
                'return_time' => null,
                'type' => 'oneway',
            ],
            [
                'id' => 4,
                'departure_airport_id' => 8,
                'arrival_airport_id' => 25,
                'departure_time' => '2024-03-05',
                'return_time' => '2024-03-08',
                'type' => 'round',
            ],
            [
                'id' => 5,
                'departure_airport_id' => 2,
                'arrival_airport_id' => 1,
                'departure_time' => '2024-02-24',
                'return_time' => null,
                'type' => 'oneway',
            ],
            [
                'id' => 6,
                'departure_airport_id' => 9,
                'arrival_airport_id' => 26,
                'departure_time' => '2024-02-24',
                'return_time' => null,
                'type' => 'oneway',
            ],
            [
                'id' => 7,
                'departure_airport_id' => 8,
                'arrival_airport_id' => 25,
                'departure_time' => '2024-03-05',
                'return_time' => '2024-03-08',
                'type' => 'round',
            ],
        ];
        DB::table('trips')->insert($trips);
    }
}

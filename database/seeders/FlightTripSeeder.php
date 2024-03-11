<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FlightTripSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pivot = [
            [
                'id' => 1,
                'trip_id' => 1,
                'flight_id' => 1,
            ],
            [
                'id' => 2,
                'trip_id' => 2,
                'flight_id' => 17,
            ],
            [
                'id' => 5,
                'trip_id' => 4,
                'flight_id' => 10,
            ],
            [
                'id' => 6,
                'trip_id' => 4,
                'flight_id' => 11,
            ],
            [
                'id' => 7,
                'trip_id' => 5,
                'flight_id' => 2,
            ],

            [
                'id' => 9,
                'trip_id' => 6,
                'flight_id' => 16,
            ],
            [
                'id' => 10,
                'trip_id' => 3,
                'flight_id' => 19,
            ],
            [
                'id' => 11,
                'trip_id' => 7,
                'flight_id' => 14,
            ],
            [
                'id' => 13,
                'trip_id' => 7,
                'flight_id' => 15,
            ],
            [
                'id' => 14,
                'trip_id' => 7,
                'flight_id' => 16,
            ],
            [
                'id' => 15,
                'trip_id' => 2,
                'flight_id' => 18,
            ],
            [
                'id' => 16,
                'trip_id' => 6,
                'flight_id' => 19,
            ],

        ];
        DB::table('flight_trip')->insert($pivot);
    }
}

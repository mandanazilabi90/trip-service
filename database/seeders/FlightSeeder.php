<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FlightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $flights = [
            [
                'id' => 1,
                'flight_number' => 'AC301',
                'airline_id' => 1,
                'departure_airport_id' => 8, // Montréal-Pierre Elliott Trudeau International Airport
                'arrival_airport_id' => 26, // Toronto Pearson International Airport
                'departure_time' => '07:35:00',
                'arrival_time' => '10:05:00',
                'price' => 273.23,
            ],
            [
                'id' => 2,
                'flight_number' => 'DL101',
                'airline_id' => 2,
                'departure_airport_id' => 2, // Los Angeles International Airport
                'arrival_airport_id' => 1, // John F. Kennedy International Airport
                'departure_time' => '10:00:00',
                'arrival_time' => '18:30:00',
                'price' => 350.00,
            ],
            [
                'id' => 3,
                'flight_number' => 'AC601',
                'airline_id' => 1,
                'departure_airport_id' => 9, // Calgary International Airport
                'arrival_airport_id' => 25, // Vancouver International Airport
                'departure_time' => '21:20:00',
                'arrival_time' => '22:20:00',
                'price' => 180.00,
            ],
//            [
//                'id' => 6,
//                'flight_number' => 'AC801',
//                'airline_id' => 1,
//                'departure_airport_id' => 11, // Calgary International Airport
//                'arrival_airport_id' => 8, // Vancouver International Airport
//                'departure_time' => '14:20:00',
//                'arrival_time' => '16:20:00',
//                'price' => 200.00,
//            ],
//            [
//                'id' => 7,
//                'flight_number' => 'DL201',
//                'airline_id' => 2,
//                'departure_airport_id' => 7,
//                'arrival_airport_id' => 8,
//                'departure_time' => '10:20:00',
//                'arrival_time' => '12:20:00',
//                'price' => 220.00,
//            ],
            [
                'id' => 9,
                'flight_number' => 'AC101',
                'airline_id' => 1,
                'departure_airport_id' => 8, //
                'arrival_airport_id' => 25, //
                'departure_time' => '17:35:00',
                'arrival_time' => '20:00:00',
                'price' => 260.00,
            ],
            [
                'id' => 10,
                'flight_number' => 'AC101',
                'airline_id' => 1,
                'departure_airport_id' => 8, //
                'arrival_airport_id' => 25, //
                'departure_time' => '21:35:00',
                'arrival_time' => '00:05:00',
                'price' => 300.00,
            ],
            [
                'id' => 11,
                'flight_number' => 'AC101',
                'airline_id' => 1,
                'departure_airport_id' => 25, //
                'arrival_airport_id' => 8, //
                'departure_time' => '12:00:00',
                'arrival_time' => '14:10:00',
                'price' => 670.00,
            ],
            [
                'id' => 12,
                'flight_number' => 'AC302',
                'airline_id' => 1,
                'departure_airport_id' => 25, //
                'arrival_airport_id' => 8, //
                'departure_time' => '11:30:00',
                'arrival_time' => '19:11:00',
                'price' => 237.00,
            ],
            [
                'id' => 13,
                'flight_number' => 'DL101',
                'airline_id' => 2,
                'departure_airport_id' => 13, //
                'arrival_airport_id' => 26, //
                'departure_time' => '16:00:00',
                'arrival_time' => '20:00:00',
                'price' => 500.00,
            ],
            [
                'id' => 14,
                'flight_number' => 'AC401',
                'airline_id' => 2,
                'departure_airport_id' => 8, //
                'arrival_airport_id' => 25, //
                'departure_time' => '18:00:00',
                'arrival_time' => '20:35:00',
                'price' => 138.23,
            ],
            [
                'id' => 15,
                'flight_number' => 'WS1234',
                'airline_id' => 21,
                'departure_airport_id' => 25, //
                'arrival_airport_id' => 9, //
                'departure_time' => '06:00:00',
                'arrival_time' => '08:00:00',
                'price' => 976.35,
            ],
            [
                'id' => 16,
                'flight_number' => 'WS1234',
                'airline_id' => 21,
                'departure_airport_id' => 9, //
                'arrival_airport_id' => 8, //
                'departure_time' => '09:10:00',
                'arrival_time' => '12:25:00',
                'price' => 865.49,
            ],
            [
                'id' => 17,
                'flight_number' => 'AC101',
                'airline_id' => 1,
                'departure_airport_id' => 8, //
                'arrival_airport_id' => 13, //
                'departure_time' => '15:35:00',
                'arrival_time' => '19:00:00',
                'price' => 260.49,
            ],
            [
                'id' => 18,
                'flight_number' => 'WS1234',
                'airline_id' => 21,
                'departure_airport_id' => 13, //
                'arrival_airport_id' => 26, //
                'departure_time' => '20:35:00',
                'arrival_time' => '22:00:00',
                'price' => 678.90,
            ],
            [
                'id' => 19,
                'flight_number' => 'AC7773',
                'airline_id' => 1,
                'departure_airport_id' => 8, //
                'arrival_airport_id' => 26, //
                'departure_time' => '05:00:00',
                'arrival_time' => '06:34:00',
                'price' => 762.43,
            ],

        ];
        DB::table('flights')->insert($flights);
    }
}

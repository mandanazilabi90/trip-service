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
                'arrival_time' => '09:45:00',
                'price' => 250.00,
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
                'departure_time' => '13:20:00',
                'arrival_time' => '14:45:00',
                'price' => 180.00,
            ],
            [
                'id' => 4,
                'flight_number' => 'UA201',
                'airline_id' => 3,
                'departure_airport_id' => 5, // Denver International Airport
                'arrival_airport_id' => 6, // San Francisco International Airport
                'departure_time' => '08:45:00',
                'arrival_time' => '10:55:00',
                'price' => 300.00,
            ],
            [
                'id' => 5,
                'flight_number' => 'AA501',
                'airline_id' => 4,
                'departure_airport_id' => 3, // Chicago O'Hare International Airport
                'arrival_airport_id' => 27, // Hartsfield-Jackson Atlanta International Airport
                'departure_time' => '11:30:00',
                'arrival_time' => '15:20:00',
                'price' => 280.00,
            ],
            [
                'id' => 6,
                'flight_number' => 'AC801',
                'airline_id' => 1,
                'departure_airport_id' => 11, // Ottawa Macdonald-Cartier International Airport
                'arrival_airport_id' => 15, // Halifax Stanfield International Airport
                'departure_time' => '06:10:00',
                'arrival_time' => '08:45:00',
                'price' => 200.00,
            ],
            [
                'id' => 7,
                'flight_number' => 'DL201',
                'airline_id' => 2,
                'departure_airport_id' => 7, // Seattle-Tacoma International Airport
                'arrival_airport_id' => 6, // San Francisco International Airport
                'departure_time' => '14:15:00',
                'arrival_time' => '16:30:00',
                'price' => 220.00,
            ],
            [
                'id' => 8,
                'flight_number' => 'UA401',
                'airline_id' => 3,
                'departure_airport_id' => 4, // Dallas/Fort Worth International Airport
                'arrival_airport_id' => 1, // John F. Kennedy International Airport
                'departure_time' => '09:20:00',
                'arrival_time' => '16:00:00',
                'price' => 350.00,
            ],
            [
                'id' => 9,
                'flight_number' => 'AC101',
                'airline_id' => 1,
                'departure_airport_id' => 8, // Montréal-Pierre Elliott Trudeau International Airport
                'arrival_airport_id' => 26, // Toronto Pearson International Airport
                'departure_time' => '12:00:00',
                'arrival_time' => '14:10:00',
                'price' => 260.00,
            ],
//            [
//                'id' => 10,
//                'flight_number' => 'AA301',
//                'airline_id' => 4,
//                'departure_airport_id' => 'MCO', // Orlando International Airport
//                'arrival_airport_id' => 'LGA', // LaGuardia Airport
//                'departure_time' => '2024-03-10 16:30:00',
//                'arrival_time' => '2024-03-10 19:20:00',
//                'price' => 320.00,
//            ],
        ];
        DB::table('flights')->insert($flights);
    }
}

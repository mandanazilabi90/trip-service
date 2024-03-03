<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AirportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $airports = [
            // United States
            ['id'=>1,'name' => 'John F. Kennedy International Airport', 'iata_code' => 'JFK', 'city_id' => 1, 'timezone' => 'America/New_York'],
            ['id'=>2,'name' => 'Los Angeles International Airport', 'iata_code' => 'LAX', 'city_id' => 2, 'timezone' => 'America/Los_Angeles'],
            ['id'=>3,'name' => 'Chicago O\'Hare International Airport', 'iata_code' => 'ORD', 'city_id' => 3, 'timezone' => 'America/Chicago'],
            ['id'=>4,'name' => 'Dallas/Fort Worth International Airport', 'iata_code' => 'DFW', 'city_id' => 9, 'timezone' => 'America/Chicago'],
            ['id'=>5,'name' => 'Denver International Airport', 'iata_code' => 'DEN', 'city_id' => 17, 'timezone' => 'America/Denver'],
            ['id'=>6,'name' => 'San Francisco International Airport', 'iata_code' => 'SFO', 'city_id' => 13,'timezone' => 'America/Los_Angeles'],
            ['id'=>7,'name' => 'Seattle-Tacoma International Airport', 'iata_code' => 'SEA', 'city_id' => 16, 'timezone' => 'America/Los_Angeles'],

            // Canada
            ['id'=>8,'name' => 'Montréal-Pierre Elliott Trudeau International Airport', 'iata_code' => 'YUL', 'city_id' => 21,'timezone' => 'America/Toronto'],
            ['id'=>9,'name' => 'Calgary International Airport', 'iata_code' => 'YYC', 'city_id' => 23,'timezone' => 'America/Edmonton'],
            ['id'=>10,'name' => 'Edmonton International Airport', 'iata_code' => 'YEG', 'city_id' => 24,'timezone' => 'America/Edmonton'],
            ['id'=>11,'name' => 'Ottawa Macdonald-Cartier International Airport', 'iata_code' => 'YOW', 'city_id' => 25,'timezone' => 'America/Toronto'],
            ['id'=>12,'name' => 'Winnipeg James Armstrong Richardson International Airport', 'iata_code' => 'YWG', 'city_id' => 26,'timezone' => 'America/Winnipeg'],
            ['id'=>13,'name' => 'Québec City Jean Lesage International Airport', 'iata_code' => 'YQB', 'city_id' => 27, 'timezone' => 'America/Toronto'],
            ['id'=>14,'name' => 'Victoria International Airport', 'iata_code' => 'YYJ', 'city_id' => 31,'timezone' => 'America/Vancouver'],
            ['id'=>15,'name' => 'Halifax Stanfield International Airport', 'iata_code' => 'YHZ', 'city_id' => 29,'timezone' => 'America/Halifax'],
            ['id'=>16,'name' => 'London International Airport', 'iata_code' => 'YXU', 'city_id' => 30,'timezone' => 'America/Toronto'],
            ['id'=>17,'name' => 'Regina International Airport', 'iata_code' => 'YQR', 'city_id' => 32,'timezone' => 'America/Regina'],
            ['id'=>18,'name' => 'Saskatoon John G. Diefenbaker International Airport', 'iata_code' => 'YXE', 'city_id' => 33, 'timezone' => 'America/Regina'],
            ['id'=>19,'name' => 'Kelowna International Airport', 'iata_code' => 'YLW', 'city_id' => 34,'timezone' => 'America/Vancouver'],
            ['id'=>20,'name' => 'St. John\'s International Airport', 'iata_code' => 'YYT', 'city_id' => 35,'timezone' => 'America/St_Johns'],
            ['id'=>21,'name' => 'Charlottetown Airport', 'iata_code' => 'YYG', 'city_id' => 36,'timezone' => 'America/Halifax'],
            ['id'=>22,'name' => 'Whitehorse International Airport', 'iata_code' => 'YXY', 'city_id' => 37,'timezone' => 'America/Whitehorse'],
            ['id'=>23,'name' => 'Yellowknife Airport', 'iata_code' => 'YZF', 'city_id' => 38,'timezone' => 'America/Yellowknife'],
            ['id'=>24,'name' => 'Iqaluit Airport', 'iata_code' => 'YFB', 'city_id' => 39, 'timezone' => 'America/Iqaluit'],
            ['id'=>25,'name' => 'Vancouver International Airport', 'iata_code' => 'YVR', 'city_id' => 22,'timezone' => 'America/Vancouver'],
            ['id' => 26,'name' => 'Toronto Pearson International Airport', 'iata_code' => 'YYZ', 'city_id' => 20,'timezone' => 'America/Toronto'],
            // United States
            ['id'=>27,'name' => 'Hartsfield-Jackson Atlanta International Airport', 'iata_code' => 'ATL', 'city_id' => 40,'timezone' => 'America/New_York'],
        ];
        DB::table('airports')->insert($airports);
    }
}
//insert into `airports` (`city_id`, `iata_code`, `id`, `location`, `name`, `timezone`)
//values (1, 'JFK', 1, POINT(-73.7781,40.6413), 'John F. Kennedy International Airport', 'America/New_York'),
//(2, 'LAX', 2, POINT(-118.4085,33.9416),' Los Angeles International Airport',' America/Los_Angeles'),
//(3, 'ORD', 3, POINT(-87.9047,41.9786)," Chicago O'Hare International Airport", 'America/Chicago'),
//(9, 'DFW', 4, POINT(-97.038,32.8968),'Dallas/Fort Worth International Airport', "America/Chicago"),
//(17, 'DEN', 5, POINT(-104.6737,39.8561), 'Denver International Airport', 'America/Denver'),
//(13, 'SFO', 6, POINT(-122.3899,37.6188),' San Francisco International Airport',' America/Los_Angeles'),
//(16, 'SEA', 7, POINT(-122.3087,47.4502),' Seattle-Tacoma International Airport', 'America/Los_Angeles'),
//(21, 'YUL', 8, POINT(-73.7407,45.4706), 'Montréal-Pierre Elliott Trudeau International Airport', 'America/Toronto'),
//(23, 'YYC', 9, POINT(-114.0105,51.1314), 'Calgary International Airport', 'America/Edmonton'),
// (24, 'YEG', 10, POINT(-113.5805,53.3086), 'Edmonton International Airport', 'America/Edmonton'),
// (25, 'YOW', 11, POINT(-75.6692,45.3215), 'Ottawa Macdonald-Cartier International Airport', 'America/Toronto'),
// (26, 'YWG', 12, POINT(-97.2399,49.9075),'Winnipeg James Armstrong Richardson International Airport', 'America/Winnipeg'),
// (27, 'YQB', 13, POINT(-71.3947,46.7911), 'Québec City Jean Lesage International Airport', 'America/Toronto'),
// (31, 'YYJ', 14, POINT(-123.4307,48.6486), 'Victoria International Airport','America/Vancouver'),
// (29, 'YHZ', 15, POINT(-63.5144,44.882), 'Halifax Stanfield International Airport', 'America/Halifax'),
// (30, 'YXU', 16, POINT(-81.1496,43.0309), 'London International Airport', 'America/Toronto'),
// (32, 'YQR', 17, POINT(-104.6664,50.4346), 'Regina International Airport', 'America/Regina'),
// (33, 'YXE', 18, POINT(-106.685,52.1711), 'Saskatoon John G. Diefenbaker International Airport', 'America/Regina'),
// (34, 'YLW', 19, POINT(-119.3806,49.9539), 'Kelowna International Airport', 'America/Vancouver'),
// (35, 'YYT', 20, POINT(-52.743,47.6186), "St. John's International Airport", 'America/St_Johns'),
// (36, 'YYG', 21, POINT(-63.1283,46.2899),' Charlottetown Airport', 'America/Halifax'),
// (37, 'YXY', 22, POINT(-135.0667,60.7096),'Whitehorse International Airport', 'America/Whitehorse'),
// (38, 'YZF', 23, POINT(-114.437,62.4628), 'Yellowknife Airport', 'America/Yellowknife'),
// (39, 'YFB', 24, POINT(-68.5563,63.7564), 'Iqaluit Airport', 'America/Iqaluit'),
// (22, 'YVR', 25, POINT(-123.1852,49.1947), 'Vancouver International Airport', 'America/Vancouver'),
// (20, 'YYZ', 26, POINT(-79.6248,43.6777), 'Toronto Pearson International Airport', 'America/Toronto'),
// (40, 'ATL', 27, POINT(-84.4277,33.6407), 'Hartsfield-Jackson Atlanta International Airport', 'America/New_York');

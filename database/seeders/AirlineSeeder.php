<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AirlineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $airlines = [
            ['id' => 1,'name' => 'Air Canada', 'iata_code' => 'AC'],
            ['id' => 2,'name' => 'Delta Air Lines', 'iata_code' => 'DL'],
            ['id' => 3,'name' => 'United Airlines', 'iata_code' => 'UA'],
            ['id' => 4,'name' => 'American Airlines', 'iata_code' => 'AA'],
            ['id' => 5,'name' => 'British Airways', 'iata_code' => 'BA'],
            ['id' => 6,'name' => 'Lufthansa', 'iata_code' => 'LH'],
            ['id' => 7,'name' => 'Emirates', 'iata_code' => 'EK'],
            ['id' => 8,'name' => 'Qatar Airways', 'iata_code' => 'QR'],
            ['id' => 9,'name' => 'Singapore Airlines', 'iata_code' => 'SQ'],
            ['id' => 10,'name' => 'Cathay Pacific', 'iata_code' => 'CX'],
            ['id' => 11,'name' => 'Air France', 'iata_code' => 'AF'],
            ['id' => 12,'name' => 'KLM Royal Dutch Airlines', 'iata_code' => 'KL'],
            ['id' => 13,'name' => 'Qantas Airways', 'iata_code' => 'QF'],
            ['id' => 14,'name' => 'Japan Airlines', 'iata_code' => 'JL'],
            ['id' => 15,'name' => 'ANA All Nippon Airways', 'iata_code' => 'NH'],
            ['id' => 16,'name' => 'Etihad Airways', 'iata_code' => 'EY'],
            ['id' => 17,'name' => 'Turkish Airlines', 'iata_code' => 'TK'],
            ['id' => 18,'name' => 'Swiss International Air Lines', 'iata_code' => 'LX'],
            ['id' => 19,'name' => 'Virgin Atlantic Airways', 'iata_code' => 'VS'],
            ['id' => 20,'name' => 'Southwest Airlines', 'iata_code' => 'WN'],
            ['id' => 21,'name' => 'WestJet Airlines', 'iata_code' => 'WS'],
        ];

        DB::table('airlines')->insert($airlines);
    }
}

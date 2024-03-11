<?php

namespace App\Models;

use Carbon\Carbon;
use Carbon\PHPStan\AbstractMacro;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Flight extends Model
{
    use HasFactory;
    protected $table = 'flights';

    public function airline()
    {
        return $this->belongsTo(Airline::class, 'airline_id');
    }
    public function departureAirport()
    {
        return $this->belongsTo(Airport::class, 'departure_airport_id');
    }
    public function arrivalAirport()
    {
        return $this->belongsTo(Airport::class, 'arrival_airport_id');
    }
    public function trips()
    {
        return $this->belongsToMany(Trip::class);
    }
    public static function fliterRoundTrip($data)
    {
        return Flight::with(['airline', 'departureAirport', 'arrivalAirport'])
            ->join('airports as departureAirport', 'flights.departure_airport_id', '=', 'departureAirport.id')
            ->join('airports as arrivalAirport', 'flights.arrival_airport_id', '=', 'arrivalAirport.id')
            ->join('flights as returnFlight', 'returnFlight.departure_airport_id', '=', 'flights.arrival_airport_id')
            ->where('returnFlight.arrival_airport_id', '=', DB::raw('flights.departure_airport_id'))
            ->where('departureAirport.id', '=',$data['departure'])
            ->where('arrivalAirport.id', '=',$data['arrival'])
//            ->whereRaw("CONVERT_TZ(CONCAT(?, ' ', flights.departure_time), departureAirport.timezone, 'UTC') >= CONVERT_TZ(CONCAT(?, ' ', CURTIME()), departureAirport.timezone, 'UTC')", [$data['depart'], $data['depart']])
            ->whereRaw("CONCAT(?, ' ', returnFlight.departure_time) > CONCAT(?, ' ', flights.arrival_time)", [$data['return'], $data['return']])
            ->whereRaw("CONVERT_TZ(CONCAT(?, ' ', flights.departure_time), departureAirport.timezone, 'UTC') < CONVERT_TZ(DATE_ADD(CONCAT(?, ' ', CURTIME()),INTERVAL 365 DAY), departureAirport.timezone, 'UTC')", [$data['depart'], $data['depart']])
            
            ->select('flights.*',
                'returnFlight.id as detail_id',
                'returnFlight.flight_number as detail_flight_number',
                'returnFlight.arrival_time as detail_arrival_time',
                'returnFlight.departure_time as detail_departure_time',
                'returnFlight.price as detail_price',
                'arrivalAirport.name as detail_departure_airport_name',
                'arrivalAirport.timezone as detail_departure_airport_timezone',
                'departureAirport.name as detail_arrival_airport_name',
                'departureAirport.timezone as detail_arrival_airport_timezone',
            )
            ->groupBy('flights.id', 'returnFlight.id')
            ->get();
    }
    public static function fliterOpenJawTrip($data)
    {

        return Flight::with(['airline', 'departureAirport', 'arrivalAirport'])
            ->join('airports as departureAirport', 'flights.departure_airport_id', '=', 'departureAirport.id')
            ->join('airports as arrivalAirport', 'flights.arrival_airport_id', '=', 'arrivalAirport.id')
            ->where('departureAirport.id', '=',$data['departure'])
            ->where('arrivalAirport.id', '=',$data['arrival'])
            ->join('flights as openjaw', 'openjaw.arrival_airport_id', '=', 'flights.departure_airport_id')
            ->where('openjaw.departure_airport_id', '<>', $data['arrival'])
            ->join('airports as openjaw_departureAirport', 'openjaw_departureAirport.id', '=', 'openjaw.departure_airport_id')
            ->whereRaw("CONVERT_TZ(CONCAT(?,' ',openjaw.departure_time), openjaw_departureAirport.timezone, 'UTC') >= CONVERT_TZ(CONCAT(?,' ',flights.arrival_time), arrivalAirport.timezone, 'UTC')",[$data['return'], $data['return']])
//            ->whereRaw("CONVERT_TZ(CONCAT(?, ' ', flights.departure_time), departureAirport.timezone, 'UTC') >= CONVERT_TZ(CONCAT(?, ' ', CURTIME()), departureAirport.timezone, 'UTC')", [$data['depart'], $data['depart']])
            ->whereRaw("CONVERT_TZ(CONCAT(?, ' ', flights.departure_time), departureAirport.timezone, 'UTC') < CONVERT_TZ(DATE_ADD(CONCAT(?, ' ', CURTIME()),INTERVAL 365 DAY), departureAirport.timezone, 'UTC')", [$data['depart'], $data['depart']])
            ->select('flights.*',
                'openjaw.id as detail_id',
                'openjaw.flight_number as detail_flight_number',
                'openjaw.arrival_time as detail_arrival_time',
                'openjaw.departure_time as detail_departure_time',
                'openjaw.price as detail_price',
                'openjaw_departureAirport.name as detail_departure_airport_name',
                'departureAirport.name as detail_arrival_airport_name',
                'departureAirport.timezone as detail_arrival_airport_timezone',
                'openjaw_departureAirport.name as detail_departure_airport_timezone',
            )
            ->groupBy('flights.id', 'openjaw.id')
            ->get();

    }
    public static function filterOneWayTrip($data)
    {
        return Flight::with(['airline', 'departureAirport', 'arrivalAirport'])
            ->join('airports as departureAirport', 'flights.departure_airport_id', '=', 'departureAirport.id')
            ->join('airports as arrivalAirport', 'flights.arrival_airport_id', '=', 'arrivalAirport.id')
            ->where('departureAirport.id', '=',$data['departure'])
            ->where('arrivalAirport.id', '=',$data['arrival'])
//            ->whereRaw("CONVERT_TZ(CONCAT(?, ' ', flights.departure_time), departureAirport.timezone, 'UTC') >= CONVERT_TZ(CONCAT(?, ' ', CURTIME()), departureAirport.timezone, 'UTC')", [$data['depart'], $data['depart']])
            ->whereRaw("CONVERT_TZ(CONCAT(?, ' ', flights.departure_time), departureAirport.timezone, 'UTC') < CONVERT_TZ(DATE_ADD(CONCAT(?, ' ', CURTIME()),INTERVAL 365 DAY), departureAirport.timezone, 'UTC')", [$data['depart'], $data['depart']])
            ->groupBy('flights.id')
            ->get();
    }
}

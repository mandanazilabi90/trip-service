<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Trip extends Model
{
    use HasFactory;
    protected $table = 'trips';
    protected $fillable = ['type','departure_airport_id','arrival_airport_id','departure_time','arrival_time'];
    public function flights()
    {
        return $this->belongsToMany(Flight::class);
    }
    public function departureAirport()
    {
        return $this->belongsTo(Airport::class, 'departure_airport_id');
    }
    public function arrivalAirport()
    {
        return $this->belongsTo(Airport::class, 'arrival_airport_id');
    }

//    public static function filter($data)
//    {
//        $date = Carbon::parse($data['depart']);
//        $upper_limit_trip = $date->addDays(365)->format('Y-m-d');
//
//         return Trip::with([
//            'flights', 'flights.departureAirport','flights.arrivalAirport','departureAirport', 'arrivalAirport',
//            'departureAirport', 'arrivalAirport'])
//            ->where('departure_airport_id', $data['departure'])
//            ->where('arrival_airport_id', $data['arrival'])
//             ->where('type', $data['type'])
//             ->where('departure_time', $data['depart'])
////            ->where(function ($query) use ($data, $upper_limit_trip){
////                $query->where('created_at', '<=', $data['depart'])
////                ->orWhere('created_at', '<=', $upper_limit_trip);
////            })
//            ->when($data['type'] == 'round', function ($query) use ($data) {
//                return $query->where('arrival_time', $data['return']);
//            })->withSum('flights as sum_of_prices', 'price')
//            ->get();
//
//    }

    public static function filter($data)
    {
        $date = Carbon::parse($data['depart']);
        $upper_limit_trip = $date->addDays(365)->format('Y-m-d');

         return Trip::with([
            'flights', 'flights.departureAirport','flights.arrivalAirport','departureAirport', 'arrivalAirport'])
            ->where('departure_airport_id', $data['departure'])
            ->where('arrival_airport_id', $data['arrival'])
             ->where('type', $data['type'])
//             ->where('departure_time', $data['depart'])
//            ->where(function ($query) use ($data, $upper_limit_trip){
//                $query->where('created_at', '<=', $data['depart'])
//                ->orWhere('created_at', '<=', $upper_limit_trip);
//            })
//            ->when($data['type'] == 'round', function ($query) use ($data) {
//                 $query->where('return_time', $data['return']);
//
//            })
             ->withSum('flights as sum_of_prices', 'price')
            ->get();

    }

}

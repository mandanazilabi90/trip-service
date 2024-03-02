<?php

namespace App\Models;

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
}

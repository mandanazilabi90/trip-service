<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Airport extends Model
{
    use HasFactory;
    protected $table = 'airports';
    protected $fillable = ['name', 'iata_code', 'city_id','location','timezone'];

    public function city()
    {
        return $this->belongsTo(City::class);
    }
    public function departures()
    {
        return $this->hasMany(Flight::class, 'departure_airport_id');
    }

    public function arrivals()
    {
        return $this->hasMany(Flight::class, 'arrival_airport_id');
    }

}

<?php

namespace App\Models;

use http\Env\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    protected $table = 'cities';
    protected $fillable = ['name', 'iata_code'];

    public function airports()
    {
        return $this->hasMany(Airport::class);
    }
    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;
    protected $table = 'regions';

    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id');
    }
    public function cities()
    {
        return $this->HasMany(City::class, 'region_id');
    }
}

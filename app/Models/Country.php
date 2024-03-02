<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    protected $table = 'countries';
    public function city()
    {
        return $this->HasMany(City::class, 'country_id');
    }
    public function country()
    {
        return $this->HasMany(Region::class, 'country_id');
    }

}

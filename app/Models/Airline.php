<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Airline extends Model
{
    use HasFactory;
    protected $table = 'airlines';
    public function flight()
    {
        return $this->HasMany(Flight::class, 'airline_id');
    }
}

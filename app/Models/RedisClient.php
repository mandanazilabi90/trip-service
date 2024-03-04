<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Predis\Client;

class RedisClient extends Model
{
    use HasFactory;
    protected $client;
    protected $parameters;
    public function __construct($parameters = [])
    {
        $this->client = new Client($parameters);
    }

    public function getClient()
    {
        return $this->client;
    }
}

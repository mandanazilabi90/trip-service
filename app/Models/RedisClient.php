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
        $this->client = new Client([
            'scheme' => 'tcp',
            'host' => '127.0.0.1',
            'port' => 6379,
        ]);
    }

    public function getClient()
    {
        return $this->client;
    }
}

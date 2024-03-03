<?php

namespace App\Repositories;

use App\Models\RedisClient;


class RedisTripRepository implements TripRepository
{

    protected $model;

    public function __construct(RedisClient $model)
    {
        $this->model = $model;
    }
    public function saveSearch($data, string $searchId)
    {
        $hashFields = [];
        foreach ($data as $field => &$value) {
            if (is_array($value)) {
                $value = json_encode($value);
            }
            $hashFields[$field] = $value;
        }
        $res = $this->model->getClient()->hmset($searchId, $hashFields);
        $this->model->getClient()->expire($searchId, 3600);
        return $res;
    }

    public function getTripList($searchId)
    {
        return $this->model->getClient()->hgetall($searchId);
    }
    function hashSearchParameters(array $data) {
        ksort($data);
        $serializedParameters = serialize($data);
        $hash = hash('sha256', $serializedParameters);
        return $hash;
    }

}

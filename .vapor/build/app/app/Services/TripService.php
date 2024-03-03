<?php

namespace App\Services;
use App\Repositories\TripRepository;

class TripService
{
    protected $tripRepository;

    public function __construct(TripRepository $tripRepository)
    {
        $this->tripRepository = $tripRepository;
    }
    public function hashSearchParameters(array $data)
    {
        return $this->tripRepository->hashSearchParameters($data);

    }
    public function saveSearch($data, String $search_id)
    {
        return $this->tripRepository->saveSearch($data, $search_id);
    }
    public function getTripList($searchId)
    {
        return $this->tripRepository->getTripList($searchId);
    }
}

<?php

namespace App\Repositories;

interface TripRepository
{
    public function saveSearch(array $data, string $searchId);

    public function getTripList($searchId);
}

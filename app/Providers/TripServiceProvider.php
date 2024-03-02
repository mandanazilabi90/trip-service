<?php

namespace App\Providers;

use App\Repositories\TripRepository;
use Illuminate\Support\ServiceProvider;
use App\Services\TripService;

class TripServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}

<?php

namespace App\Providers;

use App\Models\RedisClient;
use App\Repositories\RedisTripRepository;
use App\Repositories\TripRepository;
use App\Services\TripService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(TripRepository::class, RedisTripRepository::class);
        $this->app->bind(TripService::class, function ($app) {
            return new TripService($app->make(TripRepository::class));
        });
        $this->app->bind(RedisTripRepository::class, function () {
            return new RedisTripRepository(new RedisClient());
        });
        $this->app->bind(RedisClient::class, function () {
            return new RedisClient();
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}

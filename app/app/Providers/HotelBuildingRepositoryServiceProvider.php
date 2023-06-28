<?php

namespace App\Providers;

use App\Repositories\HotelBuildingRepository;
use App\Repositories\Interfaces\HotelBuildingRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class HotelBuildingRepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            HotelBuildingRepositoryInterface::class,
            HotelBuildingRepository::class
        );
    }

}

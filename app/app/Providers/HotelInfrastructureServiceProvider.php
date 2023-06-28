<?php

namespace App\Providers;

use App\Repositories\HotelInfrastructureRepository;
use App\Repositories\Interfaces\HotelInfrastructureInterface;
use Illuminate\Support\ServiceProvider;

class HotelInfrastructureServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            HotelInfrastructureInterface::class,
            HotelInfrastructureRepository::class
        );
    }

}

<?php

namespace App\Providers;

use App\Repositories\HotelSliderRepository;
use App\Repositories\Interfaces\HotelSliderRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class HotelSliderRepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            HotelSliderRepositoryInterface::class,
            HotelSliderRepository::class
        );
    }

}

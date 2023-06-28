<?php

namespace App\Providers;

use App\Repositories\HotelRepository;
use App\Repositories\Interfaces\HotelRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class HotelRepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            HotelRepositoryInterface::class,
            HotelRepository::class
        );
    }

}

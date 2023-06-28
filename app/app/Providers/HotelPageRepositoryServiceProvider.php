<?php

namespace App\Providers;

use App\Repositories\HotelPageRepository;
use App\Repositories\Interfaces\HotelPageRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class HotelPageRepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            HotelPageRepositoryInterface::class,
            HotelPageRepository::class
        );
    }

}

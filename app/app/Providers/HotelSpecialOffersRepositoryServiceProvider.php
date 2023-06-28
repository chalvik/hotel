<?php

namespace App\Providers;

use App\Repositories\HotelRepository;
use App\Repositories\HotelSpecialOffersRepository;
use App\Repositories\Interfaces\HotelSpecialOffersRepositoryInterface;
use App\Repositories\Interfaces\RepositoryInterface;
use Illuminate\Support\ServiceProvider;

class HotelSpecialOffersRepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            HotelSpecialOffersRepositoryInterface::class,
            HotelSpecialOffersRepository::class
        );
    }

}

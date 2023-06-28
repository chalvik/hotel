<?php

namespace App\Providers;

use App\Repositories\HotelRepository;
use App\Repositories\HotelSpecialOffersRepository;
use App\Repositories\Interfaces\HotelSpecialOffersRepositoryInterface;
use App\Repositories\Interfaces\NavigationRepositoryInterface;
use App\Repositories\Interfaces\RepositoryInterface;
use App\Repositories\NavigationRepository;
use Illuminate\Support\ServiceProvider;

class HotelNavigationRepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            NavigationRepositoryInterface::class,
            NavigationRepository::class
        );
    }

}

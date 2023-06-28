<?php

namespace App\Providers;

use App\Repositories\HotelRepository;
use App\Repositories\HotelRoomRepository;
use App\Repositories\Interfaces\HotelRoomRepositoryInterface;
use App\Repositories\Interfaces\RepositoryInterface;
use Illuminate\Support\ServiceProvider;

class HotelRoomRepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            HotelRoomRepositoryInterface::class,
            HotelRoomRepository::class
        );
    }

}

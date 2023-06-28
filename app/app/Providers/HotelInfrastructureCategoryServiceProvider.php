<?php

namespace App\Providers;

use App\Repositories\HotelInfrastructureCategoryRepository;
use App\Repositories\Interfaces\HotelInfrastructureCategoryInterface;
use Illuminate\Support\ServiceProvider;

class HotelInfrastructureCategoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            HotelInfrastructureCategoryInterface::class,
            HotelInfrastructureCategoryRepository::class
        );
    }

}

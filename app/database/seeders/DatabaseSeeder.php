<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\HotelSliderItem;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CitySeeder::class,
            HotelPageBlockSeeder::class,
            HotelPageSeeder::class,
            HotelSeeder::class,
            HotelSpecialOfferSeeder::class,
            NavigationItemSeeder::class,
            NavigationSeeder::class,
            HotelSliderSeeder::class,
            HotelSliderItemSeeder::class,
            HotelBuildingSeeder::class,
            HotelRoomSeeder::class,
            HotelRoomImageSeeder::class,
            HotelInfrastructureSeeder::class,
            HotelInfrastructureCategorySeeder::class
        ]);
    }
}

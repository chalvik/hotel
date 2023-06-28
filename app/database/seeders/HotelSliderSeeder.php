<?php

namespace Database\Seeders;

use App\Models\HotelSlider;
use Illuminate\Database\Seeder;

class HotelSliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        HotelSlider::updateOrCreate([
            'id' => 1
        ], [
            'id' => 1,

            'hotel_id' => 1,
            'name' => 'Тестовый слайдер',
            'location' => 1,
            'type' => 1,

            'version_owner_id' => 1,
            'version_name' => 1,
            'version_current' => 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\HotelSliderItem;
use Illuminate\Database\Seeder;

class HotelSliderItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        HotelSliderItem::updateOrCreate([
            'id' => 1
        ], [
            'id' => 1,

            'hotel_slider_id' => 1,
            'title' => 'Тестовый слайд',
            'content' => 'Контент слайда',
            'image' => '/img/test/preview.webp',
            'url' => '1',
            'version_owner_id' => 1,
            'version_name' => 1,
            'version_current' => 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);

        HotelSliderItem::updateOrCreate([
            'id' => 2
        ], [
            'id' => 2,

            'hotel_slider_id' => 1,
            'title' => 'Тестовый слайд 2',
            'content' => '222 Контент слайда 222',
            'image' => '/img/test/preview.webp',
            'url' => '1',

            'version_owner_id' => 1,
            'version_name' => 1,
            'version_current' => 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);

    }
}

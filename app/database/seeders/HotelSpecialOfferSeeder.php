<?php

namespace Database\Seeders;

use App\Models\HotelSpecialOffer;
use Illuminate\Database\Seeder;

class HotelSpecialOfferSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        HotelSpecialOffer::updateOrCreate([
            'id' => 1
        ], [
            'id' => 1,


            'title' => 'Акция 1',
            'content' => ' Контент',
            'image' => '/img/test/preview.webp',

            'version_owner_id' => 1,
            'version_name' => 1,
            'version_current' => 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);

        HotelSpecialOffer::updateOrCreate([
            'id' => 2
        ], [
            'id' => 2,

            'title' => 'Акция 2',
            'content' => ' Контент',
            'image' => '/img/test/preview.webp',

            'version_owner_id' => 1,
            'version_name' => 1,
            'version_current' => 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);

        HotelSpecialOffer::updateOrCreate([
            'id' => 3
        ], [
            'id' => 3,

            'title' => 'Акция 3',
            'content' => ' Контент',
            'image' => '/img/test/preview.webp',

            'version_owner_id' => 1,
            'version_name' => 1,
            'version_current' => 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);

        HotelSpecialOffer::updateOrCreate([
            'id' => 4
        ], [
            'id' => 4,
            'title' => 'Акция 4',
            'content' => ' Контент',
            'image' => '/img/test/preview.webp',

            'version_owner_id' => 1,
            'version_name' => 1,
            'version_current' => 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);

        HotelSpecialOffer::updateOrCreate([
            'id' => 5
        ], [
            'id' => 5,
            'title' => 'Акция 5',
            'content' => ' Контент',
            'image' => '/img/test/preview.webp',

            'version_owner_id' => 1,
            'version_name' => 1,
            'version_current' => 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);

        HotelSpecialOffer::updateOrCreate([
            'id' => 6
        ], [
            'id' => 6,
            'title' => 'Акция 6',
            'content' => ' Контент',
            'image' => '/img/test/preview.webp',

            'version_owner_id' => 1,
            'version_name' => 1,
            'version_current' => 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);

        HotelSpecialOffer::updateOrCreate([
            'id' => 7
        ], [
            'id' => 7,
            'title' => 'Акция 7',
            'content' => ' Контент',
            'image' => '/img/test/preview.webp',

            'version_owner_id' => 1,
            'version_name' => 1,
            'version_current' => 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);

        HotelSpecialOffer::updateOrCreate([
            'id' => 8
        ], [
            'id' => 8,
            'title' => 'Акция 8',
            'content' => ' Контент',
            'image' => '/img/test/preview.webp',

            'version_owner_id' => 1,
            'version_name' => 1,
            'version_current' => 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);

    }
}

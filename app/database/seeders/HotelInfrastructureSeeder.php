<?php

namespace Database\Seeders;

use App\Models\HotelInfrastructure;
use Illuminate\Database\Seeder;

class HotelInfrastructureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        HotelInfrastructure::updateOrCreate([
            'id' => 1
        ], [
            'id' => 1,
            'hotel_id' => 1,
            'category_id' => 2 ,
            'title' => 'Tavrika',
            'content' => 'В то время некий безымянный печатник создал большую коллекцию размеров форм шрифтов, используя Lorem Ipsum распечатки образцов.',
            'image' => '/img/test/preview.webp',
            'version_owner_id' => 1,
            'version_name' => 1,
            'version_current' => 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);

        HotelInfrastructure::updateOrCreate([
            'id' => 2
        ], [
            'id' => 2,
            'hotel_id' => 1,
            'category_id' => 2 ,
            'title' => 'La Veranda',
            'content' => 'В то время некий безымянный печатник создал большую коллекцию размеров форм шрифтов, используя Lorem Ipsum распечатки образцов.',
            'image' => '/img/test/preview.webp',
            'version_owner_id' => 1,
            'version_name' => 1,
            'version_current' => 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);

        HotelInfrastructure::updateOrCreate([
            'id' => 3
        ], [
            'id' => 3,
            'hotel_id' => 1,
            'category_id' => 2 ,
            'title' => 'The Grilled',
            'content' => 'В то время некий безымянный печатник создал большую коллекцию размеров форм шрифтов, используя Lorem Ipsum распечатки образцов.',
            'image' => '/img/test/preview.webp',
            'version_owner_id' => 1,
            'version_name' => 1,
            'version_current' => 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);

    }
}

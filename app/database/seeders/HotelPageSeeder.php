<?php

namespace Database\Seeders;

use App\Models\HotelPage;
use Illuminate\Database\Seeder;

class HotelPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        HotelPage::updateOrCreate([
            'id' => 1
        ], [
            'id' => 1,
            'version_owner_id' => 1,
            'version_name' => 1,
            'version_current' => 1,
            'hotel_id'=> 1,
            'slug' => 'main',
            'title'=> 'Главная страница',
            'seo_title'=> '',
            'seo_description'=> '',
            'seo_keywords'=> '',
            'template_id'=> 1,
            'published' => 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);

        HotelPage::updateOrCreate([
            'id' => 2
        ], [
            'id' => 2,

            'version_owner_id' => 1,
            'version_name' => 1,
            'version_current' => 1,

            'hotel_id'=> 1,
            'slug' => 'about-us',
            'title'=> 'О нас',

            'seo_title'=> '',
            'seo_description'=> '',
            'seo_keywords'=> '',

            'template_id'=> 1,

            'published' => 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);


        HotelPage::updateOrCreate([
            'id' => 3
        ], [
            'id' => 3,
            'version_owner_id' => 1,
            'version_name' => 1,
            'version_current' => 1,
            'hotel_id'=> 1,
            'slug' => 'rooms-and-prices',
            'title'=> 'НОМЕРА И ЦЕНЫ',
            'seo_title'=> '',
            'seo_description'=> '',
            'seo_keywords'=> '',
            'template_id'=> 1,
            'published' => 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);

        HotelPage::updateOrCreate([
            'id' => 4
        ], [
            'id' => 4,

            'version_owner_id' => 1,
            'version_name' => 1,
            'version_current' => 1,
            'hotel_id'=> 1,
            'slug' => 'spa',
            'title'=> 'SPA',
            'seo_title'=> '',
            'seo_description'=> '',
            'seo_keywords'=> '',
            'template_id'=> 1,
            'published' => 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);

        HotelPage::updateOrCreate([
            'id' => 5
        ], [
            'id' => 5,

            'version_owner_id' => 1,
            'version_name' => 1,
            'version_current' => 1,
            'hotel_id'=> 1,
            'slug' => 'special-offers',
            'title'=> 'АКЦИИ',
            'seo_title'=> '',
            'seo_description'=> '',
            'seo_keywords'=> '',
            'template_id'=> 1,
            'published' => 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);

        HotelPage::updateOrCreate([
            'id' => 6
        ], [
            'id' => 6,
            'version_owner_id' => 1,
            'version_name' => 1,
            'version_current' => 1,
            'hotel_id'=> 1,
            'slug' => 'restaurants',
            'title'=> 'РЕСТОРАНЫ',
            'seo_title'=> '',
            'seo_description'=> '',
            'seo_keywords'=> '',
            'template_id'=> 1,
            'published' => 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);

    }
}

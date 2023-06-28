<?php

namespace Database\Seeders;

use App\Models\Hotel;
use Illuminate\Database\Seeder;

class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Hotel::updateOrCreate([
            'id' => 1
        ], [
            'id' => 1,
            'version_owner_id' => 1,
            'version_name' => 1,
            'version_current' => 1,

            'title' => 'Riviera Sunrise Resort & Spa 5*',
            'slug'  => 'riviera',
            'logo'  => '/img/hotels/rivera.svg',
            'phone' => '8 800 550 98 24',
            'address'   => 'ул. Ленина 2, Алушта, Крым',
            'location_name' => 'Алушта, Крым',

            'city_id' => 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);

        Hotel::updateOrCreate([
            'id' => 2
        ], [
            'id' => 2,
            'version_owner_id' => 1,
            'version_name' => 1,
            'version_current' => 1,

            'title' => 'Отель Christie 4* ',
            'slug'  => 'christie',
            'logo'  => '/img/hotels/christie.webp',
            'phone' => '8 (800) 555-8052',
            'address'   => 'Республика Крым, Евпатория, поселок Мирный, Южная коса ул. Морская 10',
            'location_name' => 'Республика Крым, Евпатория,',
            'city_id' => 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);

        Hotel::updateOrCreate([
            'id' => 3
        ], [
            'id' => 3,
            'version_owner_id' => 1,
            'version_name' => 1,
            'version_current' => 1,

            'title' => 'Отель Natali ',
            'slug'  => 'natali',
            'logo'  => '/img/hotels/natalia.webp',
            'phone' => '8 (800) 555-8052',
            'address'   => 'Республика Крым, Евпатория, поселок Мирный, Южная коса ул. Морская 10',
            'location_name' => 'Республика Крым, Евпатория,',
            'city_id' => 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);

        Hotel::updateOrCreate([
            'id' => 4
        ], [
            'id' => 4,
            'version_owner_id' => 1,
            'version_name' => 1,
            'version_current' => 1,

            'title' => 'Минеральные воды ',
            'slug'  => 'riviera',
            'logo'  => '/img/hotels/minvody.webp',
            'phone' => '8 (800) 555-8052',
            'address'   => 'Республика Крым, Евпатория, поселок Мирный, Южная коса ул. Морская 10',
            'location_name' => 'Республика Крым, Евпатория,',
            'city_id' => 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);

        Hotel::updateOrCreate([
            'id' => 5
        ], [
            'id' => 5,
            'version_owner_id' => 1,
            'version_name' => 1,
            'version_current' => 1,

            'title' => 'Династия ',
            'slug'  => 'riviera',
            'logo'  => '/img/hotels/dynastiya.webp',
            'phone' => '8 (800) 555-8052',
            'address'   => 'Республика Крым, Евпатория, поселок Мирный, Южная коса ул. Морская 10',
            'location_name' => 'Республика Крым, Евпатория,',
            'city_id' => 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);




    }




}

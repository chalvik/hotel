<?php

namespace Database\Seeders;

use App\Models\NavigationItem;
use Illuminate\Database\Seeder;

class NavigationItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        NavigationItem::updateOrCreate([
            'id' => 1
        ], [
            'id' => 1,
            'pid' => null,
            'hotel_id' => 1,
            'navigation_id' => 1,
            'name' => 'Об отеле',
            'url' => null,
            'enabled' => true,
        ]);

        NavigationItem::updateOrCreate([
            'id' => 2
        ], [
            'id' => 2,
            'pid' => 1,
            'hotel_id' => 1,
            'navigation_id' => 1,
            'name' => 'О нас',
            'url' => '/about-us',
            'enabled' => true,
        ]);

        NavigationItem::updateOrCreate([
            'id' => 3
        ], [
            'id' => 3,
            'pid' => 1,
            'hotel_id' => 1,
            'navigation_id' => 1,
            'name' => 'Что посмотреть рядом',
            'url' => '/what-to-see-nearby',
            'enabled' => true,
        ]);

        NavigationItem::updateOrCreate([
            'id' => 4
        ], [
            'id' => 4,
            'pid' => 1,
            'hotel_id' => 1,
            'navigation_id' => 1,
            'name' => 'Программа лояльности',
            'url' => '/loyalty-program',
            'enabled' => true,
        ]);

        NavigationItem::updateOrCreate([
            'id' => 5
        ], [
            'id' => 5,
            'pid' => null,
            'hotel_id' => 1,
            'navigation_id' => 1,
            'name' => 'НОМЕРА И ЦЕНЫ',
            'url' => '/rooms-and-prices',
            'enabled' => true,
        ]);

        NavigationItem::updateOrCreate([
            'id' => 6
        ], [
            'id' => 6,
            'pid' => null,
            'hotel_id' => 1,
            'navigation_id' => 1,
            'name' => 'SPA',
            'url' => '/spa',
            'enabled' => true,
        ]);

        NavigationItem::updateOrCreate([
            'id' => 7
        ], [
            'id' => 7,
            'pid' => null,
            'hotel_id' => 1,
            'navigation_id' => 1,
            'name' => 'SPA',
            'url' => '/spa',
            'enabled' => true,
        ]);

        NavigationItem::updateOrCreate([
            'id' => 8
        ], [
            'id' => 8,
            'pid' => null,
            'hotel_id' => 1,
            'navigation_id' => 1,
            'name' => 'АКЦИИ',
            'url' => '/special-offers',
            'enabled' => true,
        ]);

        NavigationItem::updateOrCreate([
            'id' => 9
        ], [
            'id' => 9,
            'pid' => null,
            'hotel_id' => 1,
            'navigation_id' => 1,
            'name' => 'РЕСТОРАНЫ',
            'url' => '/restaurants',
            'enabled' => true,
        ]);

        NavigationItem::updateOrCreate([
            'id' => 10
        ], [
            'id' => 10,
            'pid' => null,
            'hotel_id' => 1,
            'navigation_id' => 1,
            'name' => 'БАССЕЙНЫ И ПЛЯЖ',
            'url' => '/pools-and-beach',
            'enabled' => true,
        ]);


        NavigationItem::updateOrCreate([
            'id' => 11
        ], [
            'id' => 11,
            'pid' => null,
            'hotel_id' => 1,
            'navigation_id' => 1,
            'name' => 'Тестовый подпункт 1',
            'url' => '/',
            'enabled' => true,
        ]);

        NavigationItem::updateOrCreate([
            'id' => 12
        ], [
            'id' => 12,
            'pid' => 11,
            'hotel_id' => 1,
            'navigation_id' => 1,
            'name' => 'Тестовый подпункт 2',
            'url' => '/',
            'enabled' => true,
        ]);

        NavigationItem::updateOrCreate([
            'id' => 13
        ], [
            'id' => 13,
            'pid' => 11,
            'hotel_id' => 1,
            'navigation_id' => 1,
            'name' => 'Тестовый подпункт 3',
            'url' => '/',
            'enabled' => true,
        ]);




        NavigationItem::updateOrCreate([
            'id' => 14
        ], [
            'id' => 14,
            'pid' => null,
            'hotel_id' => 1,
            'navigation_id' => 2,
            'name' => 'Правила отмены',
            'url' => '#',
            'enabled' => true,
        ]);
        NavigationItem::updateOrCreate([
            'id' => 15
        ], [
            'id' => 15,
            'pid' => null,
            'hotel_id' => 1,
            'navigation_id' => 2,
            'name' => 'Онлайн оплата',
            'url' => '#',
            'enabled' => true,
        ]);
        NavigationItem::updateOrCreate([
            'id' => 16
        ], [
            'id' => 16,
            'pid' => null,
            'hotel_id' => 1,
            'navigation_id' => 2,
            'name' => 'Правила проживания',
            'url' => '#',
            'enabled' => true,
        ]);
        NavigationItem::updateOrCreate([
            'id' => 17
        ], [
            'id' => 17,
            'pid' => null,
            'hotel_id' => 1,
            'navigation_id' => 2,
            'name' => 'Сертификат звездности отеля',
            'url' => '#',
            'enabled' => true,
        ]);


    }
}

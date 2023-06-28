<?php

namespace Database\Seeders;

use App\Models\HotelPage;
use App\Models\HotelPageBlock;
use Illuminate\Database\Seeder;

class HotelPageBlockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        HotelPageBlock::updateOrCreate([
            'id' => 1
        ], [
            'id' => 1,
            'version_owner_id' => 1,
            'version_name' => 1,
            'version_current' => 1,
            'hotel_page_id' => 1,
            'block_template_id' => 1,
            'title' => 'Riviera Sunrise Resort & Spa 5*',
            'sub_title' => 'ПРИГЛАШАЕМ В',
            'content' => 'руглогодичный гостиничный комплекс из двух корпусов в окружении реликтового парка. Уединенный частный пляж, стильный SPA-центр площадью 2000 м² и авторские рестораны подарят незабываемые впечатления от отдыха и зарядят энергией.',
            'url' => 'https://riviera-test.upro.group/images/gallery/2.jpg',
            'order' => 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);

        HotelPageBlock::updateOrCreate([
            'id' => 2
        ], [
            'id' => 2,
            'version_owner_id' => 1,
            'version_name' => 1,
            'version_current' => 1,
            'hotel_page_id' => 1,
            'block_template_id' => 2,
            'title' => 'Отдыхайте вместе с нами',
            'sub_title' => 'ОТЕЛИ UPRO GROUP',
            'content' => 1,
            'url' => '',
            'order' => 2,
            'created_by' => 1,
            'updated_by' => 1,
        ]);

        HotelPageBlock::updateOrCreate([
            'id' => 3
        ], [
            'id' => 3,
            'version_owner_id' => 1,
            'version_name' => 1,
            'version_current' => 1,
            'hotel_page_id' => 1,
            'block_template_id' => 3,
            'title' => 'Спецпредложения',
            'sub_title' => 'акции',
            'content' => ' ',
            'url' => ' ',
            'order' => 3,
            'created_by' => 1,
            'updated_by' => 1,
        ]);

    }
}

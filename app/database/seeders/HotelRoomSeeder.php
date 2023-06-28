<?php

namespace Database\Seeders;

use App\Models\HotelRoom;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HotelRoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        HotelRoom::updateOrCreate([
            'id' => 1
        ], [
            'id' => 1,
            'building_id' => 1,
            'room_class_id' => 1,
            'image' => '/img/hotels/christie.webp',
            'title' => 'Стандарт',
            'content' => 'Однокомнатный номер представлен спальной комнатой с одной двуспальной или двумя раздельными кроватями, гостевой зоной с мягким креслом и журнальным столиком, а также комфортной ванной комнатой.',
            'version_owner_id' => 1,
            'version_name' => 1,
            'version_current' => 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);

        HotelRoom::updateOrCreate([
            'id' => 2
        ], [
            'id' => 2,
            'building_id' => 1,
            'room_class_id' => 1,
            'image' => '/img/hotels/christie.webp',
            'title' => 'УЛУЧШЕННЫЙ',
            'content' => 'Однокомнатный номер представлен спальной комнатой с одной двуспальной или двумя раздельными кроватями, гостевой зоной с мягким креслом и журнальным столиком, а также комфортной ванной комнатой',
            'version_owner_id' => 1,
            'version_name' => 1,
            'version_current' => 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);

        HotelRoom::updateOrCreate([
            'id' => 3
        ], [
            'id' => 3,
            'building_id' => 1,
            'room_class_id' => 1,
            'image' => '/img/hotels/christie.webp',
            'title' => 'Полулюкс',
            'content' => 'Просторный двухкомнатный номер представлен спальной комнатой с одной двуспальной кроватью и гостиной с раскладным диваном или софой для уютного отдыха. Номера идеально подходят для семейного отдыха и длительного пребывания в нашем отеле.',
            'version_owner_id' => 1,
            'version_name' => 1,
            'version_current' => 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);
        HotelRoom::updateOrCreate([
            'id' => 4
        ], [
            'id' => 4,
            'building_id' => 1,
            'room_class_id' => 1,
            'image' => '/img/hotels/christie.webp',
            'title' => 'Люкс',
            'content' => 'Просторный двухкомнатный номер представлен элегантной спальной комнатой с двуспальной кроватью, гостиной с комфортабельным диваном и столовой зоной — идеальное сочетание для ценителей уюта и комфорта. Номера идеально подходят для семейного отдыха и длительного пребывания в нашем отеле.',
            'version_owner_id' => 1,
            'version_name' => 1,
            'version_current' => 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);
        HotelRoom::updateOrCreate([
            'id' => 5
        ], [
            'id' => 5,
            'building_id' => 1,
            'room_class_id' => 1,
            'image' => '/img/hotels/christie.webp',
            'title' => 'SPA-SUITE',
            'content' => 'Номер SPA-Suite представлен пятью комфортно организованными зонами совершенного отдыха: гостиная, спальная комната, СПА-зона для проведения процедур по уходу за телом, римская парная с зоной отдыха, открытая веранда с джакузи и прекрасным видом на море и реликтовый парк отеля.',
            'version_owner_id' => 1,
            'version_name' => 1,
            'version_current' => 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);
        HotelRoom::updateOrCreate([
            'id' => 6
        ], [
            'id' => 6,
            'building_id' => 1,
            'room_class_id' => 1,
            'image' => '/img/hotels/christie.webp',
            'title' => 'Президенский люкс',
            'content' => 'Изысканный трехкомнатный номер включает в себя две просторные светлые спальни, большую гостиную-лаунж с зоной столовой, две ванные комнаты и гостевой санузел, кухню с отдельным входом для персонала. Чтобы отдых стал по-настоящему идеальным в номерах данной категории продумана каждая деталь, от дизайна интерьера до комплектации.',
            'version_owner_id' => 1,
            'version_name' => 1,
            'version_current' => 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);



        HotelRoom::updateOrCreate([
            'id' => 7
        ], [
            'id' => 7,
            'building_id' => 2,
            'room_class_id' => 1,
            'image' => '/img/hotels/christie.webp',
            'title' => 'Стандарт',
            'content' => 'Однокомнатный номер представлен спальной комнатой с одной двуспальной или двумя раздельными кроватями, гостевой зоной с мягким креслом и журнальным столиком, а также комфортной ванной комнатой.',
            'version_owner_id' => 1,
            'version_name' => 1,
            'version_current' => 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);

        HotelRoom::updateOrCreate([
            'id' => 8
        ], [
            'id' => 8,
            'building_id' => 2,
            'room_class_id' => 1,
            'image' => '/img/hotels/christie.webp',
            'title' => 'УЛУЧШЕННЫЙ',
            'content' => 'Однокомнатный номер представлен спальной комнатой с одной двуспальной или двумя раздельными кроватями, гостевой зоной с мягким креслом и журнальным столиком, а также комфортной ванной комнатой',
            'version_owner_id' => 1,
            'version_name' => 1,
            'version_current' => 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);

        HotelRoom::updateOrCreate([
            'id' => 9
        ], [
            'id' => 9,
            'building_id' => 2,
            'room_class_id' => 1,
            'image' => '/img/hotels/christie.webp',
            'title' => 'Полулюкс',
            'content' => 'Просторный двухкомнатный номер представлен спальной комнатой с одной двуспальной кроватью и гостиной с раскладным диваном или софой для уютного отдыха. Номера идеально подходят для семейного отдыха и длительного пребывания в нашем отеле.',
            'version_owner_id' => 1,
            'version_name' => 1,
            'version_current' => 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);
        HotelRoom::updateOrCreate([
            'id' => 10
        ], [
            'id' => 10,
            'building_id' => 2,
            'room_class_id' => 1,
            'image' => '/img/hotels/christie.webp',
            'title' => 'Люкс',
            'content' => 'Просторный двухкомнатный номер представлен элегантной спальной комнатой с двуспальной кроватью, гостиной с комфортабельным диваном и столовой зоной — идеальное сочетание для ценителей уюта и комфорта. Номера идеально подходят для семейного отдыха и длительного пребывания в нашем отеле.',
            'version_owner_id' => 1,
            'version_name' => 1,
            'version_current' => 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);

        HotelRoom::updateOrCreate([
            'id' => 11
        ], [
            'id' => 11,
            'building_id' => 2,
            'room_class_id' => 1,
            'image' => '/img/hotels/christie.webp',
            'title' => 'Президенский люкс',
            'content' => 'Изысканный трехкомнатный номер включает в себя две просторные светлые спальни, большую гостиную-лаунж с зоной столовой, две ванные комнаты и гостевой санузел, кухню с отдельным входом для персонала. Чтобы отдых стал по-настоящему идеальным в номерах данной категории продумана каждая деталь, от дизайна интерьера до комплектации.',
            'version_owner_id' => 1,
            'version_name' => 1,
            'version_current' => 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);

    }
}

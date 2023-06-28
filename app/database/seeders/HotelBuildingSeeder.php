<?php

namespace Database\Seeders;

use App\Models\HotelBuilding;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HotelBuildingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        HotelBuilding::updateOrCreate([
            'id' => 1
        ], [
            'id' => 1,

            'building_class_id' => 5,
            'title' => 'МОДЕРН',
            'content' => 'Дизайн интерьера выдержан в стиле Модерн и выполнен в концепции Natural Cool и Ocean Style. Современная эксклюзивная дизайнерская мебель в натуральных тонах создает лучшие условия для комфорта и уюта.',

            'version_owner_id' => 1,
            'version_name' => 1,
            'version_current' => 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);

        HotelBuilding::updateOrCreate([
            'id' => 2
        ], [
            'id' => 2,
            'building_class_id' => 4,
            'title' => 'КЛАССИК',
            'content' => 'Исторический корпус Классик был полностью реновирован в 2016 году. Свою историю начал вести в 1913 году и имеет особую атмосферу. Дизайн номеров выполнен в эксклюзивном, классическом стиле.',

            'version_owner_id' => 1,
            'version_name' => 1,
            'version_current' => 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\HotelInfrastructureCategory;
use Illuminate\Database\Seeder;

class HotelInfrastructureCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        HotelInfrastructureCategory::updateOrCreate([
            'id' => 1
        ], [
            'id' => 1,
            'title' => 'Пляж',
            'version_owner_id' => 1,
            'version_name' => 1,
            'version_current' => 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);

        HotelInfrastructureCategory::updateOrCreate([
            'id' => 2
        ], [
            'id' => 2,
            'title' => 'Рестораны и бары',
            'version_owner_id' => 1,
            'version_name' => 1,
            'version_current' => 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);

        HotelInfrastructureCategory::updateOrCreate([
            'id' => 3
        ], [
            'id' => 3,
            'title' => 'Бассейны',
            'version_owner_id' => 1,
            'version_name' => 1,
            'version_current' => 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);

        HotelInfrastructureCategory::updateOrCreate([
            'id' => 4
        ], [
            'id' => 4,
            'title' => 'СПА',
            'version_owner_id' => 1,
            'version_name' => 1,
            'version_current' => 1,
            'created_by' => 1,
            'updated_by' => 1,
        ]);

    }

}

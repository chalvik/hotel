<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        City::updateOrCreate([
            'id' => 1
        ], [
            'id' => 1,
            'name' => 'Евпатория',
            'created_by' => 1,
            'updated_by' => 1,


        ]);
    }
}

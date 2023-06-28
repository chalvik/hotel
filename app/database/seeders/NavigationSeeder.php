<?php

namespace Database\Seeders;

use App\Models\Navigation;
use Illuminate\Database\Seeder;

class NavigationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Navigation::updateOrCreate([
            'id' => 1
        ], [
            'id' => 1,
            'slug' => 'header',
            'title' => 'Меню хедер',
        ]);

        Navigation::updateOrCreate([
            'id' => 2
        ], [
            'id' => 2,
            'slug' => 'footer',
            'title' => 'Меню футер',
        ]);

    }
}

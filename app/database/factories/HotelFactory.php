<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hotel>
 */
class HotelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
        'owner_id'  => fake()->owner_id(),
        'title' => fake()->title(),
        'slug' => fake()->slug(),
        'logo' => fake()->logo(),
        'phone' => fake()->phone(),
        'address' => fake()->address(),
        'location_name' => fake()->location_name(),
        'version' => fake()->version(),
        'current' => fake()->current(),
        'city_id' => fake()->city_id(),
        'user_id' => fake()->user_id(),
        ];
    }
}

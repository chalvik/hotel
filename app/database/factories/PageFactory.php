<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Page>
 */
class PageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'parent_id' => fake()->parent_id(),
            'object_id' => fake()->object_id(),
            'title' => fake()->title(),
            'menu_title' => fake()->menu_title(),
            'type' => fake()->type(),
            'url' => fake()->url(),
            'menu_enable' => fake()->menu_enable(),
            'seo_title' => fake()->seo_title(),
            'seo_description' => fake()->seo_description(),
            'user_id' => fake()->user_id(),
            'template_id' => fake()->template_id(),
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Admin;
use App\Models\Category;

class ContentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'admin_id' => 1,
            'category_id' => 1,
            'title' => $this->faker->sentence(),
            'description' => $this->faker->sentence(),
            'page' => $this->faker->randomElement(['public', 'internal', 'external']),
            'type' => $this->faker->randomElement(['text', 'video', 'image']),
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'title' => fake()->words(7, true),
            'user_id' => fake()->numberBetween(1, 11),
            'slug' => fake()->unique()->slug(3),
            'excerpt' => fake()->paragraphs(3, true),
            'body' => fake()->paragraphs(8, true),
            'category_id' => fake()->numberBetween(1, 4)
        ];
    }
}

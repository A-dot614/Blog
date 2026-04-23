<?php

namespace Database\Factories;

use App\Models\Blog;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'content' => $this->faker->paragraph,
            'author' => $this->faker->name,
            'image_path' => 'https://picsum.photos/600/400?random=' . fake()->numberBetween(1,1000),
            'slug' => $this->faker->slug,
            'status' => $this->faker->randomElement(['published', 'draft']),
            'user_id' => 1,
        ];
    }
}

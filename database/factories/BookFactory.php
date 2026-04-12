<?php

namespace Database\Factories;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category_id' => Category::factory(),
            'title' => fake()->sentence(3),
            'author' => fake()->name(),
            'price' => 'R$ '.fake()->numberBetween(29, 199).',90',
            'description' => fake()->paragraph(),
            'hotmart_url' => fake()->url(),
            'cover_image_path' => 'books/default-cover.jpg',
            'is_featured' => fake()->boolean(30),
            'is_published' => true,
            'sort_order' => fake()->numberBetween(0, 50),
            'clicks' => fake()->numberBetween(0, 1000),
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Author;
use App\Models\Publisher;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
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
            'title' => fake()->title(),
            'author' => fake()->name(),
            'year' => fake()->year(),
            'synopsis' => fake()->text(),
            'book_cover' => fake()->imageUrl(),
            'publisher' => fake()->company(),
        ];
    }
}

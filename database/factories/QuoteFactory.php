<?php

namespace Database\Factories;

use App\Models\Movie;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Quote>
 */
class QuoteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'quote' => [
                'en' => fake()->text(),
                'ka' => fake()->text(),
            ],
            'movie_id' => Movie::factory(),
            'thumbnail' => fake()->imageUrl(),
        ];
    }
}

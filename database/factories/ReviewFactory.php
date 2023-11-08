<?php

namespace Database\Factories;
use App\Models\Book;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Publisher>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
           'text' => fake()->text(),
            'rate' => rand(1,10),
            'book_id' => Book::factory(),
            'user_id'=>User::factory()
        ];
    }
}

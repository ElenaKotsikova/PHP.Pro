<?php

namespace Database\Factories;
use App\Models\Book;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use function Webmozart\Assert\Tests\StaticAnalysis\numeric;

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
           'text' => fake()->sentence(),
            'rate' => numeric(1),
            'book_id' => Book::factory(),
            'user_id'=>User::factory()
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
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
            'book_id' => \App\Models\Book::factory(),
            'rating' => $this->faker->numberBetween(1, 5),
            'review' => $this->faker->paragraph,
            'created_at' =>fake()->dateTimeBetween('-2 years', '-1 month'),
            'updated_at' =>function(array $attributes){
                return fake()->dateTimeBetween($attributes['created_at'], 'now');
            }
        ];
    }

    public function good()
    {
        return $this->state(function (array $attributes) {
            return[
                'rating' => fake()->numberBetween(4, 5),
            ];
        });
    }
    public function ungood(){
        return $this->state(function (array $attributes) {
            return[
                'rating' => fake()->numberBetween(1, 3),
            ];
        });}
}

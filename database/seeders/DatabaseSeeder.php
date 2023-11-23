<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Book;
use Illuminate\Database\Seeder;
use App\Models\Review;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Book::factory(20)->create()->each(function ($book) {
            $numReviews = random_int(5, 30);


            Review::factory()->count($numReviews)->good()->for($book)->create();
        });
        Book::factory(20)->create()->each(function ($book) {
            $numReviews = random_int(1, 5);

            Review::factory()->count($numReviews)->ungood()->for($book)->create();
        });

    }
}

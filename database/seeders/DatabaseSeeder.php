<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Address;
use App\Models\Author;
use App\Models\Book;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Author::factory()->count(100)->create()->each(function ($author) {
            Address::factory()->count(1)->create(['author_id' => $author->id]);
        });

        $authors_list = json_decode(Author::all());
        for ($i = 0; $i < 50; $i++) {
            $author = $authors_list[array_rand($authors_list)];
            Book::factory()->count(1)->create(['author_id' => $author->id]);
        }
    }
}
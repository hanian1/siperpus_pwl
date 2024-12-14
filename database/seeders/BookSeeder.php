<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            "title" => "5 cm",
            "author" => "karya Donny Dhirgantoro",
            "year" => 2005,
            "publisher" => "Grasindo",
            "city" => "Jakarta",
            "cover" => "public/5cm.jpg",
            "bookshelf_id" => 5
        ]);
    }
}

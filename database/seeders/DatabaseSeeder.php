<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;
use Illuminate\Support\Facades\Auth;


class DatabaseSeeder extends Seeder
{

    /**
     * Seed the application's database.
     */
    public function run(): void
    { 

        $this->call([
            BooksTableSeeder::class,
            CreateAdminSeeder::class,
            AutorSeeder::class,
        ]);
    }
}

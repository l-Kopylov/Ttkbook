<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Book;

class BookFactory extends Factory
{
    protected $model = Book::class;

    public function definition()
    {
        return [
            'bname' => $this->faker->sentence(3),
            'bdate' => $this->faker->dateTime(),
            'bdescription' => $this->faker->paragraph(),
            'bcover' => $this->faker->imageUrl(),
        ];
    }
}
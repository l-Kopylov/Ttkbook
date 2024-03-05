<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Autor;

class AutorFactory extends Factory
{
    protected $model = Autor::class;

    public function definition()
    {
        return [
            'aname' => $this->faker->name(),
            'country' => $this->faker->country(),
            'comment' => $this->faker->paragraph(),
        ];
    }
}
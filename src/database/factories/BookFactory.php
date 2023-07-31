<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => Str::random(10),
            'author_id' => $this->faker->numberBetween(1,20),
            'publisher_id' => $this->faker->numberBetween(1,10),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}

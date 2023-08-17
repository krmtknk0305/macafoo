<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $faker->word,
            'mail' => $faker->word,
            'title' => $faker->word,
            'about' => $faker->realText,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}

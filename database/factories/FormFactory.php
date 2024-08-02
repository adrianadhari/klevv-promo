<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FormFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'name' => fake()->name,
            'gender' => fake()->word,
            'placeOfBirth' => fake()->city,
            'city' => fake()->city,
            'idCardNumber' => fake()->randomNumber(8, true),
            'headline' => fake()->sentence,
            'phone' => fake()->randomNumber(8, true),
            'address' => fake()->address,
            'invoice' => 'annjay',
        ];
    }
}
